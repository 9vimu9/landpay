@extends('layouts.create')


@section('formContent')

{!! Form::open(['route' => 'places.store']) !!}

  @include('models.places.form')

@endsection



