<?php

use App\Salary;
use Faker\Generator as Faker;

$factory->define(Salary::class, function (Faker $faker) {
    return [
      //       $table->integer('employee_id')->unsigned();
      //       $table->integer('start_session_id')->unsigned();
      //       $table->double('amount',10,2);

    		// 'employee_id'=>$faker->numberBetween(1,12),
    		// 'start_session_id'=>$startingDate,//// '1979-06-09'
    	 //    'amount'=>$endingDate,//// '1979-06-09'
    ];
});
