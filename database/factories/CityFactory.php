<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\City;
use Faker\Generator as Faker;

$ville = [
    'Le Plateau',
    'Abobo',
    'Adjamé',
    'Attécoubé',
    'Cocody',
    'Koumassi',
    'Marcory',
    'Port-Bouët',
    'Treichville',
    'Yopougon'
];
$factory->define(City::class, function (Faker $faker) {
    return [
        //
    ];
});
