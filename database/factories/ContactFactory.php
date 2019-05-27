<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'property_id' => factory('App\Property')->create()->id,
        'contact_title' => $faker->title(),
        'business_title' => $faker->jobTitle,
        'contact_name' => $faker->name(),
        'contact_surname' => $faker->lastName,
        'contact_address' => $faker->streetAddress,
        'contact_addressno' => $faker->streetAddress,
        'contact_zipcode' => $faker->postcode,
        'contact_city' => $faker->city,
        'contact_phone' => $faker->phoneNumber,
        'contact_mobile' => $faker->e164PhoneNumber,
        'contact_fax' => $faker->phoneNumber,
        'contact_email' => $faker->email,
    ];
});