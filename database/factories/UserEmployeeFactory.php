<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserEmployee;
use Faker\Generator as Faker;

$factory->define(UserEmployee::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'employee_id' => factory('App\Employee')->create()->id,
    ];
});
