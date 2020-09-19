<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class ExerciseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_categories')->insert(['category' => "Chest / Triceps"]);
        DB::table('exercise_categories')->insert(['category' => "Abdominals"]);
        DB::table('exercise_categories')->insert(['category' => "Biceps"]);
        DB::table('exercise_categories')->insert(['category' => "Legs"]);
        DB::table('exercise_categories')->insert(['category' => "Stretches"]);
        DB::table('exercise_categories')->insert(['category' => "Back"]);
        DB::table('exercise_categories')->insert(['category' => "Shoulders"]);
    }
}
