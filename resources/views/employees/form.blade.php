{{--  Schema::create('employees', function (Blueprint $table) {
            $table->integer('id')->unsigned()->comment('fingerprint Id used as id')->unique();
            $table->string('name');
            $table->string('address',255);
            $table->string('address_temperary',255);
            $table->bigInteger('telephone_no_1');
            $table->bigInteger('telephone_no_2');
            $table->bigInteger('nic')->unique()->Nullable();
            $table->date('dob');//date of birth
            $table->date('date_joined');
            $table->integer('sessioncategory_id')->unsigned();
            $table->integer('otcategory_id')->unsigned();
            $table->integer('designation_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('sessioncategory_id')->references('id')->on('sessioncategories')->onDelete('cascade');
            $table->foreign('otcategory_id')->references('id')->on('otcategories')->onDelete('cascade');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');


        });


 --}}

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
     {!! Form::label('telephone_no_1', "Telephone number 1") !!}
     {!! Form::text('telephone_no_1', null, ['class' => 'form-control']) !!}
 </div>

  <div class="form-group">
     {!! Form::label('telephone_no_2', "Telephone number 2") !!}
     {!! Form::text('telephone_no_2', null, ['class' => 'form-control']) !!}
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
     {!! Form::label('designation_id', "designation") !!}
     {!! Form::select('designation_id', null, null, ['placeholder' => 'select a deignation']); !!}
 </div>




 {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

 {!! Form::close() !!}


