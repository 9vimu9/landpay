<?php

use App\Session;
use App\Sessioncategory;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    $session=Sessioncategory::all()->random();
    $interval=$session->intervel;
    $startingDate = $faker->dateTimeThisYear('+4 month');
    $endingDate   = strtotime('+'.$interval.' week', $startingDate->getTimestamp());
    
    return [
    	// $table->increments('id');
    	// $table->year('year');
    	// $table->integer('month');
    	// $table->date('start_date');
    	// $table->date('end_date');
    	// $table->integer('sessioncategory_id')->unsigned();

    	'year'=>$faker->numberBetween(2016,2018),
    	'month'=>$faker->numberBetween(1,12),
    	'start_date'=>$startingDate,//// '1979-06-09'
        'end_date'=>$endingDate,//// '1979-06-09'
        'sessioncategory_id'=>$session->id,
    ];
});
