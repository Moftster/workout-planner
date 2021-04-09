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
        $exercises = Exercise::all();

        $routines = [
            'Patellar Tendonitis' => 'Routine to cure patellar tendonitis',
            'Upper Body Total' => 'Routine to cure patellar tendonitis',
            'Lower Body Total' => 'Routine to cure patellar tendonitis',
            'Welcome The Morning' => 'Routine to cure patellar tendonitis',
            'Get Strong' => 'Routine to cure patellar tendonitis',
            'Build Flexibility' => 'Routine to cure patellar tendonitis',
            'Lower Body Strength and Flexiblilty' => 'Routine to cure patellar tendonitis',
            'Upper Body Strength and Flexiblilty' => 'Routine to cure patellar tendonitis'
        ];

        foreach($routines as $routineName => $routineDescription) {
            Routine::create([
                'routineName' => $routineName,
                'routineDescription' => $routineDescription
            ]);
        }

        Routine::find(1)->exercises()->attach([2 => ['exercise_routine_order' => 1], 8 => ['exercise_routine_order' => 2]]);
        Routine::find(2)->exercises()->attach([1 => ['exercise_routine_order' => 1], 2 => ['exercise_routine_order' => 2], 6 => ['exercise_routine_order' => 3], 8 => ['exercise_routine_order' => 4]]);
        Routine::find(3)->exercises()->attach([1 => ['exercise_routine_order' => 1], 3 => ['exercise_routine_order' => 2], 4 => ['exercise_routine_order' => 3], 8 => ['exercise_routine_order' => 4]]);
        Routine::find(4)->exercises()->attach([1 => ['exercise_routine_order' => 1], 3 => ['exercise_routine_order' => 2], 4 => ['exercise_routine_order' => 3], 8 => ['exercise_routine_order' => 4]]);
        Routine::find(5)->exercises()->attach([1 => ['exercise_routine_order' => 1], 3 => ['exercise_routine_order' => 2], 4 => ['exercise_routine_order' => 3], 8 => ['exercise_routine_order' => 4], 4 => ['exercise_routine_order' => 5], 8 => ['exercise_routine_order' => 6]]);
        Routine::find(6)->exercises()->attach([1 => ['exercise_routine_order' => 1], 3 => ['exercise_routine_order' => 2], 4 => ['exercise_routine_order' => 3], 8 => ['exercise_routine_order' => 4]]);
        Routine::find(7)->exercises()->attach([1 => ['exercise_routine_order' => 1], 3 => ['exercise_routine_order' => 2], 4 => ['exercise_routine_order' => 3], 8 => ['exercise_routine_order' => 4]]);
        Routine::find(8)->exercises()->attach([1 => ['exercise_routine_order' => 1], 3 => ['exercise_routine_order' => 2], 4 => ['exercise_routine_order' => 3], 8 => ['exercise_routine_order' => 4]]);


    }
}
