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

        $exercises = [
                'Banded Fly',
                'Press Up',
                'Sit Up',
                'Superman Raise',
                'Banded Deadlift',
                'Bodyweight Squat',
                'Concentric Wall Squat',
                'Lateral Side Raise',
                'Shoulder Press',
                'Chair Squat',
        ];

        foreach($exercises as $exercise) {
            Exercise::create([
                'exerciseName' => $exercise
            ]);
        }

        $categories = Category::all();

        Exercise::find(1)->categories()->attach([2, 8]);
        Exercise::find(2)->categories()->attach([1, 8]);
        Exercise::find(3)->categories()->attach([1, 8]);
        Exercise::find(4)->categories()->attach([11]);
        Exercise::find(5)->categories()->attach([1, 8]);
        Exercise::find(6)->categories()->attach([1, 8]);
        Exercise::find(7)->categories()->attach([1, 8]);
        Exercise::find(8)->categories()->attach([1, 8]);
        Exercise::find(9)->categories()->attach([1, 8]);
        Exercise::find(10)->categories()->attach([1, 8]);

    }
}
