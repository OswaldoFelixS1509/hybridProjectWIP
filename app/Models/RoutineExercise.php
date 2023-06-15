<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoutineExercise extends Model
{
    use HasFactory;

    protected $primaryKey = "routine_exercise_id";

    protected $fillable = [
        'routine_id',
        'exercise_id'
    ];
}
