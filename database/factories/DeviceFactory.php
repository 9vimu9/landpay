<?php

use App\Place;
use Faker\Generator as Faker;

$factory->define(App\Device::class, function (Faker $faker) {
    return [
    	// $table->string('name');
    	// $table->integer('place_id')->unsigned();
    	'name'=>$faker->word,
    	'place_id'=>Place::all()->random()->id,
        //
    ];
});
