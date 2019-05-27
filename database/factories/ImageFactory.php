<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'property_id' => factory('App\Property')->create()->id,
        'image' => $faker->image('/var/www/agency/storage/app/images', 600, 600),
    ];
});
