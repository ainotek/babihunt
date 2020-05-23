<?php

use Illuminate\Database\Seeder;

class UserQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\UserQuiz::class, 80)->create();
    }
}
