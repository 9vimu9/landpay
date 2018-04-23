@extends('layouts.index')

@section('filters')   

   <div class="row">

          <div class="col-md-6">
            {!! Form::label('name', "device name") !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}    
            

          </div>
          <div class="col-md-6">
            {!! Form::label('place_id', "select location") !!}
            {{-- {!! Form::select('place_id', [], 1, ['class' => 'form-control']) !!} --}}
            <select class="form-control" name="place_id" id="place_id"></select>
            {{-- {!! Form::text('place_id', null, ['class' => 'form-control']) !!} --}}

            
          </div>
       
  </div>

   <div class="form-group">
              <button  class="btn btn-primary" id="btn-filter" >Search</button>
            </div>
  

@endsection
        
  