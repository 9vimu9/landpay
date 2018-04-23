
<div class="form-group">
     {!! Form::label('name', "device name") !!}
     {!! Form::text('name', null, ['class' => 'form-control']) !!}
 </div>

 <div class="form-group">
    {!! Form::label('place_id', "select device location") !!}
    {!! Form::select('place_id', isset($device) ? [$device->place_id=>$device->place->name] : [], null, ['class' => 'form-control']) !!}

</div>


{!! Form::submit('Save', ['class' => 'btn btn-info']) !!}