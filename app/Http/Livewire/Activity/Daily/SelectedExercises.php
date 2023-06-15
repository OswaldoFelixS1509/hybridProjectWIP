<?php

namespace App\Http\Livewire\Activity\Daily;

use Livewire\Component;
use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class SelectedExercises extends Component
{
    use WithPagination;
    
    public $selectedExercises = [];
    public $selectedRoutine = 0;

    protected $listeners = ['addedExercise' => 'addExercise', 'deletedExercise' => 'deleteExercise', 'addedRoutine' => 'addRoutine'];


    public function addRoutine($routineId)
    {
        $this->selectedRoutine = $routineId;
        $exercises = Exercise::from('exercises as ex')
        ->join('routine_exercises as re', 're.exercise_id', '=', 'ex.exercise_id')
        ->join('routines as rs', 'rs.routine_id', '=', 're.routine_id')
        ->where('re.routine_id', $routineId)
        ->pluck('ex.exercise_id')->toArray();
        foreach($exercises as $exercise)
        {
            $this->addExercise($exercise);
        }
    }

    public function addExercise($id)
    {
        if(!in_array($id, $this->selectedExercises))
        {
            array_push($this->selectedExercises, strip_tags($id));
        }
    }

    public function deleteExercise($id)
    {
        if(in_array($id, $this->selectedExercises))
        {
            unset($this->selectedExercises[ array_search($id, $this->selectedExercises) ]);
            $this->selectedExercises = array_values( $this->selectedExercises);
        }
    }
    public function render()
    {
        return view('livewire.activity.daily.selected-exercises', [
            'exercises' =>  Exercise::from('exercises as ex')
            ->join('body_parts as bp', 'bp.body_part_id', '=', 'ex.body_part_id')
            ->join('exercise_categories as ec', 'ec.exercise_category_id', '=', 'ex.category_id')
            ->where('user_id', Auth::id())
            ->whereIn('ex.exercise_id', $this->selectedExercises)
            ->orWhere('user_id', 0)
            ->select('ex.exercise_id as exId','ex.name as exName', 'ex.type','bp.name as bpName', 'ec.name as ecName')
            ->orderBy('ex.name', 'ASC')
            ->orderBy('ex.type', 'ASC')
            ->get()
        ]);
    }
}

