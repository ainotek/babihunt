<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    $baseUrl = url()->to('/');
    $status = ['ACTIVE', 'INACTIVE'];
    $genders = ['Male', 'Female'];
    $defaultUserImage = "$baseUrl/assets/images/users/user.png";
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'password' => Hash::make('password'), // password
        'picture'=> $defaultUserImage,
        'is_active'=> $faker->boolean(85),
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
        'last_login'=> $faker->dateTimeThisMonth,
        'status'=> $faker->randomElement($status),
        'api_token'=> '',
        'birthday' => $faker->date('Y/m/d', '-16 years'),
        'gender' => $faker->randomElement($genders),
        'point' => $faker->randomNumber()
    ];
});
