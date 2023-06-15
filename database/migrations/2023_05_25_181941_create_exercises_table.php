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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id('exercise_id');
            $table->string('name');
            $table->text('description');
            $table->text('comments');
            $table->unsignedBigInteger('body_part_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string("type");

            $table->foreign('body_part_id')->references('body_part_id')->on('body_parts');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('category_id')->references('exercise_category_id')->on('exercise_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
