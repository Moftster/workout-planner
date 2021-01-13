<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exercise;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

$factory->define(Exercise::class, function (Faker $faker) {
    return [
        'exerciseName' => $faker->name,
    ];
});
