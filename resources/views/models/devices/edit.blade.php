@extends('layouts.edit')

@section('options-bar')
	@parent
@endsection

@section('formContent')

{!! Form::model($device, ['method' => 'PUT','route' => ['devices.update', $device]]) !!}

  @include('models.devices.form')


@endsection


@section('script')

<script type="text/javascript">

  //device/create.blade
</script>


@endsection
