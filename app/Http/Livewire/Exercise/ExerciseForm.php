<?php

namespace App\Http\Livewire\Exercise;

use Livewire\Component;
use App\Models\BodyPart;
use App\Models\ExerciseCategory;
class ExerciseForm extends Component
{
    public $title;
    public $type;

    public $count = 0;
    public $inputs = [];
 
    public function increment()
    {
        array_push($this->inputs , $this->count);
        $this->count++;
    }

    public function mount($title, $type)
    {
        $this->title = $title;
        $this->type = $type;
    }

    public function render()
    {
        $bodyParts = BodyPart::get();
        $categories = ExerciseCategory::get();
        return view('livewire.exercise.exercise-form', ['bodyParts' => $bodyParts, 'categories' => $categories]);
    }
}
