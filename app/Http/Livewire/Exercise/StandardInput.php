<?php

namespace App\Http\Livewire\Exercise;

use Livewire\Component;

class StandardInput extends Component
{
    public $count;
    public $type;

    public function mount($count, $type)
    {
        $this->count = $count;
        $this->type = $type;
    }
    public function render()
    {
        return view('livewire.exercise.standard-input');
    }
}
