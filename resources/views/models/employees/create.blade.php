@extends('layouts.create')

@section('options-bar')
@endsection

@section('formContent')

{!! Form::open(['route' => 'employees.store']) !!}

  @include('models.employees.form')

@endsection



