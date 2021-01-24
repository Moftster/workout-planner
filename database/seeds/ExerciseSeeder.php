<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Category;
use App\Exercise;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Exercise::class, 30)->create();

        $categories = Category::all();

        foreach (Exercise::all() as $exercise) {
            $exercise->categories()->attach(
                $categories->random(rand(1,5))->pluck('id')
            );
        }
    }
}
