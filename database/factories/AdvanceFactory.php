<?php

use App\User;
use App\Advance;
use App\Session;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Advance::class, function (Faker $faker) {
	
	$employee=Employee::all()->random();

    return [
    	// $table->integer('employee_id')->unsigned();
    	// $table->integer('session_id')->unsigned();
    	// $table->string('remarks')->nullable();
    	// $table->integer('user_id')->unsigned();
		
    	'session_id'=>Session::all()->random()->id,
    	'employee_id'=>$employee->id,
    	'user_id'=>User::all()->except($employee->id)->random()->id,
    	'amount'=>$faker->numberBetween(500,1000),
    	'remarks'=>$faker->paragraph(1),
    ];
});
