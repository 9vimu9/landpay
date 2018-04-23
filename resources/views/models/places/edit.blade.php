@extends('layouts.edit')

@section('options-bar')
	@parent
@endsection

@section('formContent')

{!! Form::model($place, ['method' => 'PUT','route' => ['places.update', $place]]) !!}

  @include('models.places.form')


@endsection


@section('script')


@endsection
