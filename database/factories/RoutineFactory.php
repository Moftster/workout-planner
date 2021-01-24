<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Routine;
use Faker\Generator as Faker;

$factory->define(Routine::class, function (Faker $faker) {
    return [
        'routineName' => $faker->word,
        'routineDescription' => $faker->sentence
    ];
});
