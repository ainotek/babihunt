<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $status = ['ACTIVE', 'INACTIVE'];
    return [
        'parent_id' => 0,
        'name' => $faker->word,
        'description' => $faker->sentence,
        'logo' => 'https://s1.thcdn.com/productimg/1600/1600/12277207-1434709843747787.jpg',
        'status' => $faker->randomElement($status),
    ];
});
