<?php

namespace App\Http\Livewire\Routines;

use Livewire\Component;
use App\Models\Routine;
use App\Models\RoutineExercise;

class RoutineExercises extends Component
{
    public Routine $routine;

    public function mount( Routine $routine)
    {
        $this->routine = $routine;
    }

    public function render()
    {
        return view('livewire.routines.routine-exercises', [
            'exercises' => RoutineExercise::from('routine_exercises as re')
            ->join('exercises as ex', 'ex.exercise_id', '=', 're.exercise_id')
            ->where('routine_id', $this->routine->routine_id)
            ->get()
        ]
        );
    }
}
