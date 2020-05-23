<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RewardSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(PlaceSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(AnswerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserAnswerSeeder::class);
        $this->call(UserQuizSeeder::class);
        $this->call(UserRewardSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
