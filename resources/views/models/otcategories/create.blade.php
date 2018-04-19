@extends('layouts.create')


@section('formContent')

{!! Form::open(['route' => 'otcategories.store']) !!}

  @include('models.otcategories.form')

@endsection



