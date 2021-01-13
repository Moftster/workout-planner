<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('exercises')->insert([
        //     'exerciseName' => "test 1",
        //     'exerciseCategory' => "test 2",
        // ]);

        factory(App\Exercise::class, 10)->create();

    }
}
