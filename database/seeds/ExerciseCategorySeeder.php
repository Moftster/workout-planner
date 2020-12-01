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
        DB::table('exercise_categories')->insert(['category' => "Chest"]);
        DB::table('exercise_categories')->insert(['category' => "Triceps"]);
        DB::table('exercise_categories')->insert(['category' => "Abdominals"]);
        DB::table('exercise_categories')->insert(['category' => "Biceps"]);
        DB::table('exercise_categories')->insert(['category' => "Hamstrings"]);
        DB::table('exercise_categories')->insert(['category' => "Quadraceps"]);
        DB::table('exercise_categories')->insert(['category' => "Forearms"]);
        DB::table('exercise_categories')->insert(['category' => "Trapezius"]);
        DB::table('exercise_categories')->insert(['category' => "Calves"]);
        DB::table('exercise_categories')->insert(['category' => "Glutes"]);
        DB::table('exercise_categories')->insert(['category' => "Back"]);
        DB::table('exercise_categories')->insert(['category' => "Shoulders"]);
        DB::table('exercise_categories')->insert(['category' => "Stretches"]);
    }
}
