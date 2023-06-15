<?php

namespace App\Http\Livewire\Routines;

use Livewire\Component;
use App\Models\Routine;

class RoutineCard extends Component
{
    public Routine $routine;

    public function render()
    {
        return view('livewire.routines.routine-card');
    }
}
