<?php

use App\Salary;
use App\Sessioncategory;
use Faker\Generator as Faker;

$factory->define(Sessioncategory::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'intervel'=>$intervel=$faker->numberBetween(2,4),
        'salary_type'=>$intervel<4 ? Salary::DAILY_SALARY : Salary::MONTHLY_SALARY,

    ];
});
