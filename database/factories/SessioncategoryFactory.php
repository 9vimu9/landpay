<?php

use App\Sessioncategory;
use Faker\Generator as Faker;

$factory->define(Sessioncategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
