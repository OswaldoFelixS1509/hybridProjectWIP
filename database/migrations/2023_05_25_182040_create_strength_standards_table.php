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
        Schema::create('strength_standards', function (Blueprint $table) {
            $table->id('strength_standard_id');
            $table->unsignedBigInteger('exercise_id');
            $table->string('sets');
            $table->string('repetitions');
            $table->integer('level');
            $table->foreign('exercise_id')->references('exercise_id')->on('exercises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strength_standards');
    }
};
