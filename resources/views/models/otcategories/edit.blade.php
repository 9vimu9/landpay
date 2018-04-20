@extends('layouts.edit')

@section('options-bar')
	@parent
@endsection

@section('formContent')

{!! Form::model($otcategorystatus, ['method' => 'PUT','route' => ['otcategories.update', $otcategorystatus]]) !!}

  @include('models.otcategories.form')


@endsection


@section('script')


@endsection
