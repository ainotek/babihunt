<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\City;
use App\Models\Country;
use Faker\Generator as Faker;


$factory->define(City::class, function (Faker $faker) {
    $cities = [
        'Le Plateau', 'Abobo',
        'Adjamé', 'Attécoubé',
        'Cocody', 'Koumassi',
        'Marcory', 'Port-Bouët',
        'Treichville', 'Yopougon'
    ];
    $countryId = Country::first()->pluck('id')[0];
    foreach ($cities as $city){
        City::create(
            [
                'parent_id' => 1,
                'name' => $city,
                'country_id' => $countryId,
            ]
        );
    }

    return [
        'parent_id' => 0,
        'name' => 'Abidjan',
        'country_id' => $countryId,
    ];
});
