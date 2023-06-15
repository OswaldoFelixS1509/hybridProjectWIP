<?php

namespace App\Http\Livewire\Routines\Details;

use Livewire\Component;

class ExerciseLevels extends Component
{
    public $exercise;
    public function render()
    {
        return view('livewire.routines.details.exercise-levels');
    }
}
