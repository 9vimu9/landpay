<?php

use App\Employee;
use App\Otcategory;
use App\Designation;
use App\Sessioncategory;
use Faker\Generator as Faker;

//EmployeeFactory will manufacture fake data for empoloyees table
$factory->define(Employee::class, function (Faker $faker) {
    return [
          // $table->integer('id')->unsigned()->comment('fingerprint Id used as id')->unique();
          //   $table->string('name');
          //   $table->string('address',255);
          //   $table->string('address_temperary',255);
          //   $table->bigInteger('telephone_no_1');
          //   $table->bigInteger('telephone_no_2');
          //   $table->bigInteger('nic')->unique()->Nullable();
          //   $table->date('dob');//date of birth
          //   $table->date('date_joined');
          //   $table->integer('sessioncategory_id')->unsigned();
          //   $table->integer('otcategory_id')->unsigned();
          //   $table->integer('designation_id')->unsigned();
           
       		'id'=>$faker->unique()->numberBetween(0,10000000),
            'name' => $faker->unique()->name,
            'address' => $faker->address,
            'address_temperary' => $faker->address,
       		'telephone_no_1'=>$faker->numberBetween(700000000,799999999),
       		'telephone_no_2'=>$faker->numberBetween(700000000,799999999),
       		'nic'=>$faker->unique()->numberBetween(1000000000,9999999999),
       		'dob'=>$faker->date('Y-m-d','-18 years'),//// '1979-06-09'
       		'date_joined'=>$faker->date('Y-m-d','now'),//// '1979-06-09'
       		'sessioncategory_id'=>Sessioncategory::all()->random()->id,
       		'otcategory_id'=>Otcategory::all()->random()->id,
       		'designation_id'=>Designation::all()->random()->id,

    ];
});
