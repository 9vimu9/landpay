@extends('layouts.edit')

@section('options-bar')
	@parent
@endsection

@section('formContent')

{!! Form::model($employee, ['method' => 'PUT','route' => ['employees.update', $employee]]) !!}

  @include('models.employees.form')


@endsection


@section('script')

<script type="text/javascript">

  //employee/create.blade
</script>


@endsection
