<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PropertyEmployee;
use Faker\Generator as Faker;

$factory->define(PropertyEmployee::class, function (Faker $faker) {
    return [
        'property_id' => factory('App\Property')->create()->id,
        'employee_id' => factory('App\Employee')->create()->id,
    ];
});
