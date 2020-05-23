<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Answer;
use App\Models\Question;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    $times = 4;
    $questionsId = Question::all()->pluck('id')->toArray();
    foreach ($questionsId as $questionId ){
        for ($i = 0; $i < $times; $i++){
            Answer::create([
                "label"=> $faker->text,
                "text" => $faker->sentence,
                "is_true" => $faker->boolean(40),
                "question_id" => $questionId
            ]);
        }
    }
    return [
        "label"=> $faker->text,
        "text" => $faker->sentence,
        "is_true" => $faker->boolean(40),
        "question_id" => $faker->randomElement($questionsId)
    ];
});
