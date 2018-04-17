@extends('layouts.master')

@section('title')
    Employees-create
@endsection

@section('pageHeader')
    Employees
@endsection

@section('optionalDescription')
    create a new employee
@endsection

@section('options-bar')
  <a href="{{route('employees.index')}}" class="btn btn-warning btn-sm ">all employees</a>
  <a href="#" class="btn btn-primary btn-sm">ddd</a>
@endsection

@section('content')

{!! Form::open(['route' => 'employees.store']) !!}

 <div class="form-group">
     {!! Form::label('name', "Employee's name") !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('address', "Employee's permenent address") !!}
     {!! Form::text('address', null, ['class' => 'form-control']) !!}
 </div>

<div class="form-group">
     {!! Form::label('address_temperary', "Employee's temporary address") !!}
     {!! Form::text('address_temperary', null, ['class' => 'form-control']) !!}
 </div>

 <div class="form-group">
  <div class="row">
    <div class="col-md-6">
       {!! Form::label('telephone_no_1', "Telephone number 1") !!}
     {!! Form::text('telephone_no_1', null, ['class' => 'form-control']) !!}

    </div>
    <div class="col-md-6">
       {!! Form::label('telephone_no_2', "Telephone number 2") !!}
     {!! Form::text('telephone_no_2', null, ['class' => 'form-control']) !!}
    </div>

  </div>
        
 </div>

  <div class="form-group">
     {!! Form::label('nic', "National Identity card number") !!}
     {!! Form::text('nic', null, ['class' => 'form-control']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('dob', " date of birth") !!}
     {!! Form::text('dob', null, ['class' => 'form-control']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('date_joined', "date joined") !!}
     {!! Form::text('date_joined', null, ['class' => 'form-control']) !!}
 </div>

 <div class="form-group">
                         <label for="users">Select user</label>
                         <select name="designation_id" id="designation_id" class="form-control">
                         </select>
          </div>




 {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}

 {!! Form::close() !!}

        

@endsection

@section('laravel-jsvalidation')
{!! JsValidator::formRequest('App\Http\Requests\StoreEmployeeRequest', '#my-form'); !!}
@endsection


@section('script')

<script>
  $(function () {
   

  });
</script>

@endsection
