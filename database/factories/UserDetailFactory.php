<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\UserDetail;
use Faker\Generator as Faker;

$factory->define(UserDetail::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'last_name' => $faker->lastName(),
        'gender' => $faker->word,
        'address' => $faker->streetAddress,
        'zipcode' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
    ];
});