<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workout_exercises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_id');
            $table->string('sets');
            $table->string('repetitions');
            $table->unsignedBigInteger('exercise_id');

            $table->foreign('workout_id')->references('workout_id')->on('workouts');
            $table->foreign('exercise_id')->references('exercise_id')->on('exercises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_exercises');
    }
};
