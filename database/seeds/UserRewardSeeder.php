<?php

use Illuminate\Database\Seeder;

class UserRewardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\UserReward::class, 80)->create();
    }
}
