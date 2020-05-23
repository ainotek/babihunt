<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserQuiz;
use Faker\Generator as Faker;

$factory->define(UserQuiz::class, function (Faker $faker) {
    $users = \App\Models\User::all()->pluck('id')->toArray();
    $quizzes = \App\Models\Quiz::all()->pluck('id')->toArray();
    return [
        'quiz_id' => $faker->randomElement($quizzes),
        'user_id'=> $faker->randomElement($users),
        'point'=> $faker->randomNumber(),
    ];
});
