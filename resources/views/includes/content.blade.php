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
        </div>
      
      </ol>
    </section>
{{-- <br> --}}
    <!-- Main content -->
    <section class="content container-fluid">
  
    @component('components.box', ['type' => 'box-solid'])

        @yield('content')
        
    @endcomponent


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->