<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $baseUrl = url()->to('/');
    $defaultUserImage = "$baseUrl/assets/images/users/user.png";
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'phone' => $faker->phoneNumber,
        'password' => Hash::make('password'), // password
        'remember_token' => Str::random(10),
    ];
});
