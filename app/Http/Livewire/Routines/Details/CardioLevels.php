<?php

namespace App\Http\Livewire\Routines\Details;

use Livewire\Component;
use App\Models\CardioStandards;
class CardioLevels extends Component
{
    public $exercise;

    public function render()
    {
        return view('livewire.routines.details.cardio-levels', [
            'levels' => CardioStandards::where('exercise_id', $this->exercise->exercise_id)
            ->select('time', 'distance', 'level')
            ->orderBy('level', 'ASC')
            ->get()
        ]);
    }
}
