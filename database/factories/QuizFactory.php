<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Quiz;
use App\Models\Reward;
use Faker\Generator as Faker;

$factory->define(Quiz::class, function (Faker $faker) {
    $categories = Category::all()->pluck('id')->toArray();
    $rewards = Reward::all()->pluck('id')->toArray();
    $maxPoints = [1000, 2000, 3000, 4000, 5000];
    return [
        'name'=> $faker->word,
        'description'=>$faker->sentence,
        'logo'=> 'https://pngimage.net/wp-content/uploads/2018/06/your-company-logo-png-6.png',
        'is_active'=> $faker->boolean,
        'start_at'=>$faker->dateTimeBetween('-1month', '+8month')->format('Y/m/d H:i:s'),
        'stop_at'=>$faker->dateTimeBetween('+8month', '+10month')->format('Y/m/d H:i:s'),
        'max_point'=> $faker->randomElement($maxPoints),
        'category_id'=> $faker->randomElement($categories),
        'reward_id'=> $faker->randomElement($rewards),
        'is_private'=>$faker->boolean(20),
        'passphrase'=>$faker->word,
    ];
});
