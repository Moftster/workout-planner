<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['category' => "Triceps"]);
        DB::table('categories')->insert(['category' => "Chest"]);
        DB::table('categories')->insert(['category' => "Abdominals"]);
        DB::table('categories')->insert(['category' => "Biceps"]);
        DB::table('categories')->insert(['category' => "Hamstrings"]);
        DB::table('categories')->insert(['category' => "Quadraceps"]);
        DB::table('categories')->insert(['category' => "Forearms"]);
        DB::table('categories')->insert(['category' => "Trapezius"]);
        DB::table('categories')->insert(['category' => "Calves"]);
        DB::table('categories')->insert(['category' => "Glutes"]);
        DB::table('categories')->insert(['category' => "Back"]);
        DB::table('categories')->insert(['category' => "Shoulders"]);
        DB::table('categories')->insert(['category' => "Stretches"]);
    }
}
