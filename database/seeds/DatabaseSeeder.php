<?php

use Illuminate\Database\Seeder;

use App\Exercise;
use App\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ExerciseSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoutineSeeder::class);
    }
}
