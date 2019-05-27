<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'birth_date' => $faker->date('Y-m-d'),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'gender' => $faker->word,
        'hire_date' => $faker->date('Y-m-d'),
    ];
});