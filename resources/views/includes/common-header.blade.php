<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title','no name'){{config('app.titlePartial')}}</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('AdminLTE/dist/css/skins/skin-blue.min.css')}}">

{{-- daterangepicker --}}
<link rel="stylesheet" href="{{asset('css/libraries/daterangepicker.min.css')}}">


{{-- select2 --}}
<link rel="stylesheet" href="{{asset('css/libraries/select2.min.css')}}">


  <!-- Google Font -->
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

{{-- datatables --}}
<link rel="stylesheet" href="{{asset('css/libraries/jquery.dataTables.min.css')}}">


{{-- bootstrap toggle --}}
<link rel="stylesheet" href="{{asset('css/libraries/bootstrap-toggle.min.css')}}">

{{-- bootstrap date time picker --}}
<link rel="stylesheet" href="{{asset('css/libraries/bootstrap-datetimepicker.css')}}">

</head>