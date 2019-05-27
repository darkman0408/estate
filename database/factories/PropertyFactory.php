<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'date_listed' => $faker->date('Y-m-d'),
        'property_type' => $faker->word,
        'listing_type' => $faker->word,
        'property_size' => $faker->randomDigitNotNull,
        'land_size' => $faker->randomDigitNotNull,
        'price' => $faker->randomDigitNotNull,
        'link' => $faker->url,
        'energy_efficiency' => $faker->word,
        'title' => $faker->word,
        'description' => $faker->sentences(2, true),
        'created_by' => $faker->firstName(),
        'updated_by' => $faker->firstName(),
    ];
});