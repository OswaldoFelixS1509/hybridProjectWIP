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
        Schema::create('routine_exercises', function (Blueprint $table) {
            $table->id('routine_exercise_id');
            $table->unsignedBigInteger('routine_id');
            $table->unsignedBigInteger('exercise_id');

            $table->foreign('exercise_id')->references('exercise_id')->on('exercises');
            $table->foreign('routine_id')->references('routine_id')->on('routines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routine_exercises');
    }
};
