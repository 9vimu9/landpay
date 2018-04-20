@if(!isset($otcategory))
  <div class="form-group">
       {!! Form::label('name', "name of the category") !!}
       {!! Form::text('name', null, ['class' => 'form-control']) !!}
   </div>
   
  <hr>
@endif

 <div class="form-group">


        <div class="form-group">
    <h4>OT setup</h4>
    {!! Form::label('allow_ot_weekday', "allow OT at week days") !!}
    {!! Form::checkbox('allow_ot_weekday', App\Otcategorystatus::ALLOW_OT_WEEKDAY,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

 </div>
  <div class="form-group">
    {!! Form::label('allow_ot_saturday', "allow OT at saturdays") !!}
    {!! Form::checkbox('allow_ot_saturday', App\Otcategorystatus::ALLOW_OT_SATURDAY,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

 </div>

 <div class="form-group">
    {!! Form::label('allow_ot_sunday', "allow OT at sundays") !!}
    {!! Form::checkbox('allow_ot_sunday', App\Otcategorystatus::ALLOW_OT_SUNDAY,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

 </div>

  <div class="form-group">
    {!! Form::label('allow_ot_holiday', "allow OT at holidays") !!}
    {!! Form::checkbox('allow_ot_holiday', App\Otcategorystatus::ALLOW_OT_HOLIDAY,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

 </div>
       

 </div>
 <hr>

 <div class="form-group">

         <h4>Double OT setup</h4>
      
      <div class="form-group">
        {!! Form::label('allow_double_ot_saturday', "allow Double OT at saturdays") !!}
    {!! Form::checkbox('allow_double_ot_saturday', App\Otcategorystatus::ALLOW_DOUBLE_OT_SATURDAY,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

     </div>

     <div class="form-group">
        {!! Form::label('allow_double_ot_sunday', "allow Double OT at sundays") !!}
    {!! Form::checkbox('allow_double_ot_sunday', App\Otcategorystatus::ALLOW_DOUBLE_OT_SUNDAY,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

     </div>

      <div class="form-group">
        {!! Form::label('allow_double_ot_holiday', "allow Double OT at holidays") !!}
    {!! Form::checkbox('allow_double_ot_holiday', App\Otcategorystatus::ALLOW_DOUBLE_OT_HOLIDAY,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

     </div>

     <div class="form-group">
     {!! Form::label('week_day_double_ot_start_time', "week day double OT start time") !!}
     {!! Form::text('week_day_double_ot_start_time', null, ['class' => 'timepicker form-control ']) !!}
 </div>

 </div>
 <hr>






  <div class="form-group">
    <h4>Over time initialisation</h4>
    <div class="form-group">
     {!! Form::label('threshold', "minimum Over time duration in minutes") !!}
     {!! Form::number('threshold', null, ['class' => 'form-control']) !!}
 </div>
    <div class="row">
      <div class="col-md-6">
      
        {!! Form::label('allow_clockin_ot', "Over time before Planned clock in") !!}
    {!! Form::checkbox('allow_clockin_ot', App\Otcategorystatus::ALLOW_CLOCKOUT_OT,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

      </div>

      <div class="col-md-6">
       {!! Form::label('allow_clockout_ot', "Over time after Planned clock out") !!}
    {!! Form::checkbox('allow_clockout_ot', App\Otcategorystatus::ALLOW_CLOCKOUT_OT,false,['class' => 'form-control toggle','data-on'=>"allowed" , 'data-off'=>"nope"]) !!}

      </div>

  </div>
 
  

 </div>
 <hr>

 





<div class="form-group">
    <h4>breakfast time configuration</h4>

    <div class="row">
      <div class="col-md-6">
       {!! Form::label('interval_deduction_clockin_time', "deduct breakfast time from morning OT if clock in before") !!}
     {!! Form::text('interval_deduction_clockin_time', null, ['class' => 'timepicker form-control ']) !!}
       
      </div>

      <div class="col-md-6">
          {!! Form::label('interval_deduction_clockin_ot', "breakfast duration for deduction in minutes") !!}
     {!! Form::number('interval_deduction_clockin_ot', null, ['class' => 'form-control']) !!}
      </div>

  </div>
 </div>
 <hr>


 <div class="form-group">
    <h4>dinner time configuration</h4>

    <div class="row">
      <div class="col-md-6">
       {!! Form::label('interval_deduction_clockout_time', "deduct dinner time from  OT if clock out after") !!}
     {!! Form::text('interval_deduction_clockout_time', null, ['class' => 'timepicker form-control']) !!}
       
      </div>

      <div class="col-md-6">
          {!! Form::label('interval_deduction_clockout_ot', "dinner duration for deduction in minutes") !!}
     {!! Form::number('interval_deduction_clockout_ot', null, ['class' => 'form-control']) !!}
      </div>

  </div>
 </div>
 <hr>

 <div class="form-group">
    <h4>fix rates configuration</h4>
     {!! Form::label('allow_fix_rate', "select ot rate calculation method") !!}
    {!! Form::checkbox('allow_fix_rate', App\Otcategorystatus::ALLOW_FIX_RATE,false,['class' => 'form-control toggle','data-offstyle'=>'danger', 'data-on'=>"FIX RATE" , 'data-off'=>"DYNAMIC RATE"]) !!}

 </div>
 
 <div class="form-group">

     {!! Form::label('ot_fix_rate', "OT fix rate value in LKR") !!}
     {!! Form::text('ot_fix_rate', null, ['class' => 'form-control']) !!}

     {!! Form::label('double_ot_fix_rate', "double OT fix rate value in LKR") !!}
     {!! Form::text('double_ot_fix_rate', null, ['class' => 'form-control']) !!}

 </div>

{!! Form::submit('Save', ['class' => 'btn btn-info']) !!}