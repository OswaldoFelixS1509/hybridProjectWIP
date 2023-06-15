<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercise_categories', function (Blueprint $table) {
            $table->id('exercise_category_id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('exercise_categories')->insert([
            'name' => 'Callisthenics',
        ]);
        DB::table('exercise_categories')->insert([
            'name' => 'Weights',
        ]);
        DB::table('exercise_categories')->insert([
            'name' => 'Machines',
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_categories');
    }
};
