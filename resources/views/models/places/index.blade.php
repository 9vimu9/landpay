@extends('layouts.index')

@section('filters')   

	 <div class="row">

          
    	    <div class="form-group">
     			{!! Form::label('name', "name") !!}
     			{!! Form::text('name', null, ['class' => 'form-control']) !!}

 			</div>
 		<button  class="btn btn-primary" id="btn-filter" >Search</button>
	</div>


@endsection
        
  