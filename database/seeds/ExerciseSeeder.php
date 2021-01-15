<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Category;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Exercise::class, 10)->create();

        foreach(Category::all() as $category) {
            $exercises = \App\Exercise::inRandomOrder()->take(rand(1,3))->pluck('id');
            $category->exercises()->attach($exercises);
        }

    }
}
