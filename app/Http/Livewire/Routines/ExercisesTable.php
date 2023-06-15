<?php

namespace App\Http\Livewire\Routines;

use Livewire\Component;
use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ExercisesTable extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.routines.exercises-table', [
            'exercises' =>  Exercise::from('exercises as ex')
            ->join('body_parts as bp', 'bp.body_part_id', '=', 'ex.body_part_id')
            ->join('exercise_categories as ec', 'ec.exercise_category_id', '=', 'ex.category_id')
            ->where('user_id', Auth::id())
            ->where('ex.name', 'like', $this->search.'%')
            ->orWhere('user_id', 0)
            ->select('ex.exercise_id as exId','ex.name as exName', 'ex.type','bp.name as bpName', 'ec.name as ecName')
            ->orderBy('ex.name', 'ASC')
            ->orderBy('ex.type', 'ASC')
            ->paginate()
        ]);
    }
}
