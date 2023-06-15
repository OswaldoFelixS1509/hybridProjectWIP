<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrengthStandards extends Model
{
    use HasFactory;

    protected $primaryKey = "strength_standard_id";

    protected $fillable = [
        'exercise_id',
        'sets',
        'repetitions',
        'level'
    ];
}
