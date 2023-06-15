<?php

namespace App\Http\Livewire\Exercise\List;

use Livewire\Component;
use App\Models\Exercise;

class ExerciseCard extends Component
{
    public Exercise $exercise;
    public function render()
    {
        return view('livewire.exercise.list.exercise-card');
    }
}
