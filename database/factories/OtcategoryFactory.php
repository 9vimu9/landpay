<?php

use App\Otcategory;
use Faker\Generator as Faker;

$factory->define(Otcategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        //
    ];
});
