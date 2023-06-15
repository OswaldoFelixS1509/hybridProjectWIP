<?php

namespace App\Http\Livewire\Activity\Daily;

use Livewire\Component;

class RoutineCard extends Component
{
    public $routine;
    public function render()
    {
        return view('livewire.activity.daily.routine-card');
    }
}
