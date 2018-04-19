  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield("pageHeader")
        <small>
        @yield("optionalDescription")
        </small>
      </h1>
      <ol class="breadcrumb">

        <div class="btn-group">
          @yield('options-bar')
          
          @isset($createRoute)
            <a href="{{route($createRoute)}}" class="btn btn-primary btn-sm ">new {{$modelName}}</a>
          @endisset

          @isset($indexRoute)
            <a href="{{route($indexRoute)}}" class="btn btn-warning btn-sm ">all {{str_plural($modelName)}}</a>
          @endisset

        
        </div>
      
      </ol>
    </section>
{{-- <br> --}}
    <!-- Main content -->
    <section class="content container-fluid">
      <!-- laracast flash message -->
            @include('flash::message')
    @component('components.box', ['type' => 'box-solid'])

        @yield('content')
        
    @endcomponent


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->