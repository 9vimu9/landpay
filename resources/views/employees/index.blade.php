@extends('layouts.index')

@section('title')
    Employees -index
@endsection

@section('pageHeader')
    Employees
@endsection

@section('optionalDescription')
    summery of employees
@endsection

@section('options-bar')
  {{-- <a href="#" class="btn btn-warning btn-sm ">ddd</a> --}}
  <a href="{{route('employees.create')}}" class="btn btn-primary btn-sm ">NEW EMPLOYEE</a>
 
@endsection


   @section('filters')   
      <div class="row">

        <div class="col-md-4">
          
          <div class="form-group">
            <label for="id">finger print id</label>
            <input class="form-control" name="id" id="id" type="number">
          </div>

          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" name="name" id="name" placeholder="search name" type="text">
          </div>
          
          {{-- <div class="form-group"> --}}
            <label for="date_joined">date joined</label>
            <input class="daterangepicker form-control " name="date_joined" id="date_joined" placeholder="search join date" type="text">
          {{-- </div> --}}

        </div>
        <!-- /.col -->
        <div class="col-md-4">

         <div class="form-group">
          <label for="NIC">NIC</label>
          <input class="form-control" name="nic" id="nic" type="text">
        </div>
          <!-- /.form-group -->
         <div class="form-group">
          <label for="address">address</label>
          <input class="form-control" name="address" id="address" placeholder="search address" type="text">
        </div>
          <!-- /.form-group -->

        <div class="form-group">
          <button  class="btn btn-primary" id="btn-filter" >Search</button>

          <div class="form-group">
                         <label for="users">Select user</label>
                         <select name="designation_id" id="designation_id" class="form-control">
            </select>
          </div>
        </div>
          <!-- /.form-group -->
        </div>

        <div class="col-md-4">

          <div class="form-group">
            <label for="telephone_no">telephone no</label>
            <input class="form-control" name="telephone_no" id="telephone_no" placeholder="search telephone no" type="text">
          </div>

          <div class="form-group">

            <label for="dob">date of birth</label>
            <input class="datepicker form-control" name="dob" id="dob" placeholder="search dob" type="text">

          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection

        
  