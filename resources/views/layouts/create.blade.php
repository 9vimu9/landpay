@extends('layouts.master')

@section('title')
    {{str_plural($modelName)}}-create
@endsection

@section('pageHeader')
    <i class="fa fa-plus"></i> {{str_plural($modelName)}}
@endsection

@section('optionalDescription')
    create a new {{$modelName}}
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


