<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Exercise;
use App\Routine;

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

        $exercises = Exercise::all();

        foreach(Routine::all() as $routine) {
            $routine->exercises()->attach(
                $exercises->random(rand(3,14))->pluck('id')
            );
        }
    }
}
