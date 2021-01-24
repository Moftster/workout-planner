<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Exercise;

class RoutineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Routine::class, 10)->create();

        foreach(Exercise::all() as $exercise) {
            $routines = \App\Routine::inRandomOrder()->take(rand(1,3))->pluck('id');
            $exercise->routines()->attach($routines);
        }
    }
}
