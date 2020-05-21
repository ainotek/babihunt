<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin;
use App\Models\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

$factory->define(Admin::class, function (Faker $faker) {
    $role = Role::all()->pluck('id')->toArray();
    $baseUrl = url()->to('/');
    $defaultAdminImage = "$baseUrl/assets/images/users/user.png";
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'password' => Hash::make('password'),
        'picture' => $defaultAdminImage ,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
        'status' => 'ACTIVATED',
        'birthday' => $faker->date('Y/m/d', '-16 years'),
        'last_login' => 'ACTIVATED',
        'role_id' => $faker->randomElement($role)
    ];
});
