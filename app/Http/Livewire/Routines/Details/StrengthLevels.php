<?php

namespace App\Http\Livewire\Routines\Details;

use Livewire\Component;
use App\Models\StrengthStandards;

class StrengthLevels extends Component
{

    public $exercise;

    public function render()
    {
        return view('livewire.routines.details.strength-levels', [
            'levels' => StrengthStandards::where('exercise_id', $this->exercise->exercise_id)
            ->select('sets', 'repetitions', 'level')
            ->orderBy('level', 'ASC')
            ->get()
        ]);
    }
}
