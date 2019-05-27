<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'property_id' => factory('App\Property')->create()->id,
        'video' => $faker->url,
    ];
});
