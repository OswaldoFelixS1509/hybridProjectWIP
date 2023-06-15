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
        Schema::create('body_parts', function (Blueprint $table) {
            $table->id('body_part_id');
            $table->string('name');
            $table->string('bodyPicture')->nullable();
            $table->timestamps();
        });

        DB::table('body_parts')->insert([
            'name' => 'Arms',
        ]);
        DB::table('body_parts')->insert([
            'name' => 'Shoulders',
        ]);
        DB::table('body_parts')->insert([
            'name' => 'Chest',
        ]);
        DB::table('body_parts')->insert([
            'name' => 'Back',
        ]);
        DB::table('body_parts')->insert([
            'name' => 'Core',
        ]);
        DB::table('body_parts')->insert([
            'name' => 'Hips',
        ]);
        DB::table('body_parts')->insert([
            'name' => 'Legs',
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_parts');
    }
};
