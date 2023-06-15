<?php

namespace App\Http\Livewire\Activity\Daily;

use Livewire\Component;
use App\Models\Routine;

class RoutineModal extends Component
{
    public function render()
    {
        return view('livewire.activity.daily.routine-modal',
    [
        'routines' => Routine::get()
    ]);
    }
}
