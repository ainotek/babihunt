<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reward;
use Faker\Generator as Faker;

$factory->define(Reward::class, function (Faker $faker) {
    return [
        'label'=> $faker->word,
        'description'=> $faker->sentence,
    ];
});
