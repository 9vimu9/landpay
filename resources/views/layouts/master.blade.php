<!DOCTYPE html>

<html>
  @include('includes.common-header')

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <!-- Main Header -->
  @include('includes.main-header')
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('includes.main-sidebar')
  
  <!-- Content Wrapper. Contains page content -->
  @include('includes.content')

  <!-- Main Footer -->
  @include('includes.main-footer')

  <!-- Control Sidebar -->
  @include('includes.control-sidebar')
  
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
{{-- <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
        crossorigin="anonymous"></script> --}}

{{-- select2 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

{{-- moment --}}
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>

{{-- datatables --}}
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

{{-- date range pocker --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.16.4/jquery.daterangepicker.min.js"></script>


<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{{-- bootstrap toggle --}}
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

{{-- Wickedpicker --}}
<script type="text/javascript" src="{{asset('js/libraries/wickedpicker.js')}}"></script>


@yield('laravel-jsvalidation')


<script >
//following code snippts will assign values for js global variables
  var select2Route="{{route('ajax.select2')}}";
</script>


{{-- custome js files (created by me ha ha ha) --}}
<script src="{{asset('js/customizations/daterangepicker.js')}}"></script>

<script src="{{asset('js/customizations/select2.js')}}"></script>

<script src="{{asset('js/customizations/toggle.js')}}"></script>

<script src="{{asset('js/customizations/wickedpicker.js')}}"></script>




@yield('script')

<script >
 

  $(document).ready(function(){
  $('#flash-overlay-modal').modal();
  $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
});

</script>

</body>
</html>