<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $roles = ['ADMIN', 'SUPERVISOR', 'SUPERADMIN'];
    foreach ($roles as $role) {
        Role::create([
            'name' => $role,
            'description' => $role,
        ]);
    }
    return [
        'name' => 'SUPPORT',
        'description' => 'SUPPORT',
    ];
});
