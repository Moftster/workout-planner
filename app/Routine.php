<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{

    protected $guarded = [];

    protected $fillable = ['routineName', 'routineDescription', 'routineCategory'];

    public function exercises(){
        return $this->belongsToMany(Exercise::class)
            ->withTimestamps()
            ->withPivot('exercise_routine_order');
    }
}
