<div class="box box-
@isset($color)
  {{$color}}
@endisset

@isset($type)
  {{$type}}
@endisset
"
>
  @isset($title)
    <div class="box-header with-border">
      <h3 class="box-title">{{$title}}</h3>

      @isset($tools)
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      @endisset
      <!-- /.box-tools -->
    </div>
  
  @endisset


    <!-- /.box-header -->
    <div class="box-body">
      {{$slot}}
    </div>
    <!-- /.box-body -->
</div>
  <!-- /.box -->