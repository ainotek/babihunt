<?php

use Illuminate\Database\Seeder;

class PasswordResetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\PasswordReset::class, 1)->create();
    }
}
