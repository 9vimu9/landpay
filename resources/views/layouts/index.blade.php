@extends('layouts.master')

@section('title')
    {{str_plural($modelName)}}-index
@endsection

@section('pageHeader')
    <i class="fa fa-list-alt" aria-hidden="true"></i>
{{str_plural($modelName)}}
@endsection

@section('optionalDescription')
    summery of {{str_plural($modelName)}}
@endsection


@section('content')


    @component('components.box', ['color'=>'default','type' => 'box-solid',"title"=>'filter',"tools"=>true])
      
      @yield('filters')
        
    @endcomponent

    <table id="table-index" class="display nowrap table table-hover table-condensed" style="width:100%">

      <thead>
        <tr>
          @foreach ($columns as $column)
            <th>{{$column}}</th>
          @endforeach
        </tr>
      </thead>

    </table>


@endsection


@section('script')

<script>
  @parent
  
  $(function () {
    var oTable = $('#table-index').DataTable({
        "scrollX": true,
      processing: true,
      serverSide: true,
      searching: false,
      ajax: {
          url: route,//laravel to js variable
          data: function (d) {
            jQuery.each( filters, function( index, value ) {
              d[value] = $('[name='+value+']').val();

            });
          }
      },
      columns: columns
    });

    $('#btn-filter').on('click', function(e) {
        oTable.draw();
    });

  });
</script>

@endsection

