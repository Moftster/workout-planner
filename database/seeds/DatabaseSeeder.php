<?php

use Illuminate\Database\Seeder;

use App\Exercise;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExerciseCategorySeeder::class);
        $this->call(ExerciseSeeder::class);
        $this->call(UserSeeder::class);
    }
}
