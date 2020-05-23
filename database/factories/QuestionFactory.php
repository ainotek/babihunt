<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PLace;
use App\Models\Question;
use App\Models\Quiz;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $quizzes = Quiz::all()->pluck('id')->toArray();
    $places = PLace::all()->pluck('id')->toArray();
    $points = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $times = 10;
    foreach ($quizzes as $quiz) {
        for ($i = 0; $i < $times; $i++) {
            Question::create([
                'name' => $faker->word,
                'quiz_id' => $quiz,
                'hints' => $faker->sentence,
                'point' => $faker->randomElement($points),
                'limit' => $faker->randomDigitNotNull,
                'is_active' => $faker->boolean(90),
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Emblem-question.svg/1200px-Emblem-question.svg.png',
                'place_id' => $faker->randomElement($places),
            ]);
        }
    }
    return [
        'name' => $faker->word,
        'quiz_id' => $faker->randomElement($quizzes),
        'hints' => $faker->sentence,
        'point' => $faker->randomElement($points),
        'limit' => $faker->randomDigitNotNull,
        'is_active' => $faker->boolean(90),
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Emblem-question.svg/1200px-Emblem-question.svg.png',
        'place_id' => $faker->randomElement($places),
    ];
});
