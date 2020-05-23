<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Place;
use Faker\Generator as Faker;

$factory->define(Place::class, function (Faker $faker) {
    $cities = \App\Models\City::all()->pluck('id')->toArray();
    return [
        'name' => $faker->city,
        'description'=> $faker->sentence,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'city_id' => $faker->randomElement($cities)
    ];
});
