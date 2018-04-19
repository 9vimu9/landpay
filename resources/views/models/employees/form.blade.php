



<div class="form-group">
     {!! Form::label('name', "Employee's name") !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}
 </div>

 <div class="form-group">
     {!! Form::label('id', "Finger print ID") !!}
     {!! Form::number('id', null, ['class' => 'form-control']) !!}
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
   
</div>

 <div class="form-group">
  <div class="row">
    <div class="col-md-6">
       {!! Form::label('designation_id', "select a designation") !!}

        {!! Form::select('designation_id', isset($employee) ? [$employee->designation_id=>$employee->designation->name] : [], null, ['class' => 'form-control']) !!}

    </div>
    <div class="col-md-6">
       {!! Form::label('isLabour', "Is he/she a labour ?") !!}

       <input id="toggle-one" name="isLabour" checked type="checkbox" class="form-control toggle"  data-on="LABOURER"  data-off="EMPLOYEE" data-size="large">
    </div>

  </div>
        
 </div>

 <div class="form-group">
    {!! Form::label('sessioncategory_id', "select a salary session category") !!}

    {!! Form::select('sessioncategory_id', isset($employee) ? [$employee->sessioncategory_id=>$employee->sessioncategory->name] : [], null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('otcategory_id', "select a Over time category") !!}
  
 
   {!! Form::select('otcategory_id', isset($employee) ? [$employee->otcategory_id=>$employee->otcategory->name] : [], null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Save', ['class' => 'btn btn-info']) !!}