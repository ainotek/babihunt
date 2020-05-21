<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name' => 'Côte d\'Ivoire',
        'iso2' => 'CI',
        'iso3' => 'CIV',
        'prefix' => '225',
    ];
});
