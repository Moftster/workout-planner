<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseRoutineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_routine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exercise_id');
            $table->unsignedBigInteger('routine_id');
            $table->timestamps();
            $table->unsignedInteger('exercise_routine_order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_routine');
    }
}
