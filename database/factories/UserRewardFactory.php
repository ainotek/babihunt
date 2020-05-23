<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserReward;
use Faker\Generator as Faker;

$factory->define(UserReward::class, function (Faker $faker) {
    $users = \App\Models\User::all()->pluck('id')->toArray();
    $rewards = \App\Models\Reward::all()->pluck('id')->toArray();
    return [
        'reward_id'=>$faker->randomElement($rewards),
        'user_id'=>$faker->randomElement($users),
    ];
});
