@extends('layouts.master')

@section('title')
    Employees -index
@endsection

@section('pageHeader')
    Employees
@endsection

@section('optionalDescription')
    summery of employees
@endsection

@section('options-bar')
  <a href="#" class="btn btn-warning btn-sm ">ddd</a>
  <a href="#" class="btn btn-primary btn-sm">ddd</a>
@endsection

@section('content')

  @component('components.box', ['type' => 'box-solid'])

    @component('components.box', ['type' => 'box-solid'])
      
      <div class="form-inline">
        {{-- ////////////////////////////////////// --}}

      {{--     $filters=[//input names of each filter
            'name',
            'id',
            'address',
            'telephone_no',
            'nic',
            'dob',
            'date_joined'
        ]; --}}
         <div class="form-group">
          <label for="id">finger print id</label>
          <input class="form-control" name="id" id="id" type="number">
        </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" name="name" id="name" placeholder="search name" type="text">
        </div>

         <div class="form-group">
          <label for="NIC">NIC</label>
          <input class="form-control" name="nic" id="nic" type="text">
        </div>

        <div class="form-group">
          <label for="address">address</label>
          <input class="form-control" name="address" id="address" placeholder="search address" type="text">
        </div>

        <div class="form-group">
          <label for="telephone_no">telephone no</label>
          <input class="form-control" name="telephone_no" id="telephone_no" placeholder="search telephone no" type="text">
        </div>

        <div class="form-group">
          <label for="dob">date of birth</label>
          <input class="form-control" name="dob" id="dob" placeholder="search dob" type="text">
        </div>

        <div class="form-group">
          <label for="date_joined">date joined</label>
          <input class="form-control" name="date_joined" id="date_joined" placeholder="search join date" type="text">
        </div>

        <button  class="btn btn-primary" id="btn-filter" >Search</button>
      {{-- //////////////////////////////////////////// --}}
      </div>
        
    @endcomponent

    <table id="table-index" class="table table-hover table-condensed" style="width:100%">

      <thead>
        <tr>
          @foreach ($columns as $column)
            <th>{{$column}}</th>
          @endforeach

          
        </tr>
      </thead>

    </table>

  @endcomponent

@endsection


@section('script')

<script>
  $(function () {
    var oTable = $('#table-index').DataTable({
      
      processing: true,
      serverSide: true,
      searching: false,
      ajax: {
          url: route,//laravel to js variable
          data: function (d) {
            jQuery.each( filters, function( index, value ) {
              d[value] = $('input[name='+value+']').val();

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
