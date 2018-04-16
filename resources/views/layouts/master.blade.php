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

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
{{-- @include('laravel_to_js_vars') --}}

@yield('script')

</body>
</html>