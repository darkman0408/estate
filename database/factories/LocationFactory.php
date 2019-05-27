<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'property_id' => factory('App\Property')->create()->id,
        'location_postal_code' => $faker->postcode,
        'location_city' => $faker->city,
        'location_address' => $faker->streetAddress,
        'geox' => $faker->latitude(),
        'geoy' => $faker->longitude(),
    ];
});