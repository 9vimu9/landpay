  <div class="form-group">
       {!! Form::label('name', "place code") !!}
       {!! Form::text('name', null, ['class' => 'form-control']) !!}
   </div>
   
{!! Form::submit('Save', ['class' => 'btn btn-info']) !!}