<?php

namespace App\Http\Livewire\Exercise\Details;

use Livewire\Component;
use App\Models\Exercise;

class ExerciseDetails extends Component
{
    public Exercise $exercise;
    public function render()
    {
        return view('livewire.exercise.details.exercise-details');
    }
}
