
<div class="form-group">
     {!! Form::label('name', "name of the category") !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}
 </div>

 


 <div class="form-group">


        <div class="form-group">
    <h4>OT setup</h4>
    {!! Form::label('allow_ot_weekday', "allow OT at week days") !!}
    <input  name="allow_clockout_ot" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
 </div>

  <div class="form-group">
    {!! Form::label('allow_ot_saturday', "allow OT at saturdays") !!}
    <input  name="allow_ot_saturday" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
 </div>

 <div class="form-group">
    {!! Form::label('allow_ot_sunday', "allow OT at sundays") !!}
    <input  name="allow_ot_sunday" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
 </div>

  <div class="form-group">
    {!! Form::label('allow_ot_holiday', "allow OT at holidays") !!}
    <input  name="allow_ot_holiday" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
 </div>
       



           

 </div>

 <div class="form-group">

         <h4>Double OT setup</h4>
      
      <div class="form-group">
        {!! Form::label('allow_double_ot_saturday', "allow Double OT at saturdays") !!}
        <input  name="allow_double_ot_saturday" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
     </div>

     <div class="form-group">
        {!! Form::label('allow_double_ot_sunday', "allow Double OT at sundays") !!}
        <input  name="allow_double_ot_sunday" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
     </div>

      <div class="form-group">
        {!! Form::label('allow_double_ot_holiday', "allow Double OT at holidays") !!}
        <input  name="allow_double_ot_holiday" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
     </div>

     <div class="form-group">
     {!! Form::label('week_day_double_ot_start_time', "week day double OT start time") !!}
     {!! Form::text('week_day_double_ot_start_time', null, ['class' => 'form-control']) !!}
 </div>

 </div>






  <div class="form-group">
    <h4>Over time initialisation</h4>
    <div class="row">
      <div class="col-md-6">
      
        {!! Form::label('allow_clockin_ot', "Over time before Planned clock in") !!}
        <input  name="allow_clockin_ot" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
      </div>

      <div class="col-md-6">
       {!! Form::label('allow_clockout_ot', "Over time after Planned clock out") !!}
        <input  name="allow_clockout_ot" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
      </div>

  </div>
 
  <div class="form-group">
     {!! Form::label('threshold', "minimum Over time duration in minutes") !!}
     {!! Form::number('threshold', null, ['class' => 'form-control']) !!}
 </div>

 </div>

 





<div class="form-group">
    <h4>breakfast time configuration</h4>

    <div class="row">
      <div class="col-md-6">
       {!! Form::label('interval_deduction_clockin', "deduct breakfast time from morning OT if clock in before") !!}
     {!! Form::text('interval_deduction_clockin', null, ['class' => 'form-control']) !!}
       
      </div>

      <div class="col-md-6">
          {!! Form::label('interval_deduction_clockin_ot', "breakfast duration for deduction in minutes") !!}
     {!! Form::number('interval_deduction_clockin_ot', null, ['class' => 'form-control']) !!}
      </div>

  </div>
 </div>


 <div class="form-group">
    <h4>dinner time configuration</h4>

    <div class="row">
      <div class="col-md-6">
       {!! Form::label('interval_deduction_clockout', "deduct dinner time from  OT if clock out after") !!}
     {!! Form::text('interval_deduction_clockout', null, ['class' => 'form-control']) !!}
       
      </div>

      <div class="col-md-6">
          {!! Form::label('interval_deduction_clockout_ot', "dinner duration for deduction in minutes") !!}
     {!! Form::number('interval_deduction_clockout_ot', null, ['class' => 'form-control']) !!}
      </div>

  </div>
 </div>

 <div class="form-group">
    <h4>fix rates configuration</h4>
     {!! Form::label('allow_fix_rate', "select ot rate calculation method") !!}
    <input  name="allow_fix_rate" checked type="checkbox" class="form-control toggle" data-offstyle='danger' data-on="FIX RATE"  data-off="DYNAMIC RATE" >
 </div>
 
 <div class="form-group">

     {!! Form::label('ot_fix_rate', "OT fix rate value in LKR") !!}
     {!! Form::text('ot_fix_rate', null, ['class' => 'form-control']) !!}

     {!! Form::label('double_ot_fix_rate', "double OT fix rate value in LKR") !!}
     {!! Form::text('double_ot_fix_rate', null, ['class' => 'form-control']) !!}

 </div>












 <div class="form-group">
    <div class="row">

     

      <div class="col-md-6">
       {!! Form::label('breakfast_deduction_duration', "deduction for breakfast in mins") !!}
     {!! Form::number('breakfast_deduction_duration', null, ['class' => 'form-control']) !!}

  </div>
 </div>

 <div class="form-group">
    <div class="row">

     

      <div class="col-md-6">
       {!! Form::label('dinner_deduction_duration', "name of the category") !!}
     {!! Form::number('dinner_deduction_duration', null, ['class' => 'form-control']) !!}

  </div>
 </div>
 </div>


   <div class="form-group">
    <div class="row">
      <div class="col-md-6">
      
        {!! Form::label('allow_waiting_ot_after_work', "Over time before clock in") !!}
        <input  name="allow_waiting_ot_after_work" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
      </div>

      <div class="col-md-6">
       {!! Form::label('allow_ot_after_work', "Over time before clock in") !!}
        <input  name="allow_ot_after_work" checked type="checkbox" class="form-control toggle"  data-on="allowed"  data-off="nope">
      </div>

  </div>
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