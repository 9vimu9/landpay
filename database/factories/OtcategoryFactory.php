<?php

use Faker\Generator as Faker;

$factory->define(App\Otcategory::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        //
    ];
});
