<?php

use App\Labour;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Labour::class, function (Faker $faker) {

	// $table->increments('id');
	// $table->integer('employee_id')->unsigned();
	// $table->decimal('expected_rate', 10, 2)->nullable();
	// $table->date('work_start_date');
	// $table->integer('recommend_employee_id')->unsigned();
	// $table->softDeletes();
	// $table->timestamps();

	$employee=Employee::all()->random();

    return [

    	'expected_rate'=>$faker->numberBetween(450,3000),
    	'work_start_date'=>$faker->date('Y-m-d','now'),//// '1979-06-09'
    	'employee_id'=>$employee->id,
		'recommend_employee_id'=>Employee::all()->except($employee->id)->random()->id

    ];
});
