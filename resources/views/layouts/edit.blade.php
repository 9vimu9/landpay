@extends('layouts.master')

@section('title')
    {{$modelName}}-edit
@endsection

@section('pageHeader')
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{$modelName}} : {{$objectName}}
@endsection

@section('optionalDescription')
    edit {{$modelName}} : {{$objectName}}
@endsection

@section('options-bar')
  <a href="#" class="btn btn-danger btn-sm "><strong>remove</strong></a>
@endsection


@section('content')

  @yield('formContent')
  
  {!! Form::close() !!}

@endsection

@section('laravel-jsvalidation')
  {!! JsValidator::formRequest($formRequestPath, 'form'); !!}
@endsection


@section('script')

<script type="text/javascript">
  //layout/create.blade
</script>


@endsection


