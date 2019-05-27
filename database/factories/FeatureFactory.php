<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Feature;
use Faker\Generator as Faker;

$factory->define(Feature::class, function (Faker $faker) {
    return [
        'property_id' => factory('App\Property')->create()->id,
        'bedrooms' => $faker->randomDigitNotNull,
        'bathrooms' => $faker->randomDigitNotNull,
        'rooms' => $faker->randomDigitNotNull,
        'condition' => $faker->word,
        'age' => $faker->year(),
        'floor' => $faker->word,
    ];
});