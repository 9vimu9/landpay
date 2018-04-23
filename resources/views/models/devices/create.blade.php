@extends('layouts.create')

@section('options-bar')
@endsection

@section('formContent')

{!! Form::open(['route' => 'devices.store']) !!}

  @include('models.devices.form')

@endsection



