<?php

namespace App\Http\Livewire\Routines\Details;

use Livewire\Component;
use App\Models\Routine;
use App\Models\Exercise;

class RoutineDetails extends Component
{
    public  $routine;

    public function render()
    {
        return view('livewire.routines.details.routine-details',[
            'exercises' => Exercise::from('exercises as ex')
            ->join('routine_exercises as re', 're.exercise_id', '=', 'ex.exercise_id')
            ->where('re.routine_id', $this->routine->routine_id)
            ->select('ex.*')
            ->get()
        ]);
    }
}
