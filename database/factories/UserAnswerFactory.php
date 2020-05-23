<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserAnswer;
use Faker\Generator as Faker;

$factory->define(UserAnswer::class, function (Faker $faker) {
    $users = \App\Models\User::all()->pluck('id')->toArray();
    $answers = \App\Models\Answer::all()->pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($users),
        'answer_id'=> $faker->randomElement($answers)
    ];
});
