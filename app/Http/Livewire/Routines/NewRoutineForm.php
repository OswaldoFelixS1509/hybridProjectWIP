<?php

namespace App\Http\Livewire\Routines;

use Livewire\Component;
use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class NewRoutineForm extends Component
{
    


    public function render()
    {
        
        return view('livewire.routines.new-routine-form');
    }
}
