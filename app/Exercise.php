<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ['exerciseName', 'exerciseCategory'];

    public function routines()
    {
        return $this->belongsToMany(Routine::class)
            ->withTimestamps()
            ->withPivot('exercise_routine_order');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
