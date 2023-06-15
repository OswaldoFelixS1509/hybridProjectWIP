<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Exercise;
use App\Models\StrengthStandards;
use App\Models\CardioStandards;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    public function newStrengthExercise()
    {
        return view('exercises.newStrengthExercise');
    }

    public function newCardioExercise()
    {
        return view('exercises.newCardioExercise');
    }

    public function saveStrengthExercise(Request $request)
    {//Creates a new strength exercise record 
        //Validates all inputs
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'bodyPart'      => 'required|numeric',
            'category'      => 'required|numeric',
            'sets'          => 'required|array|min:1',
            'sets.*'        => 'required',
            'repetitions'   => 'required|array|min:1',
            'repetitions.*' => 'required',
            'description'   => 'required',

        ]);
        if($validator->fails())
        {//If a input doesn't complete the requirements returns an error 
            return response()->json(array('success' => false, 'errors' => $validator->errors()));
        }
        //Creates a new Exercise model
        $exercise = new Exercise();
        //Puts data on
        $exercise->name = strip_tags( $request->name );
        $exercise->description = strip_tags( $request->description);
        $exercise->comments = strip_tags( $request->comments);
        $exercise->body_part_id = strip_tags( $request->bodyPart);
        $exercise->user_id = Auth::id();
        $exercise->type = "Strength";
        $exercise->category_id = strip_tags( $request->category);
        //Saves new exercise
        $exercise->save();
        $counter = 0;
        foreach($request->sets as $set)
        {//Create a new Strength standard record
            StrengthStandards::create([
                'exercise_id'   => strip_tags($exercise->exercise_id),
                'sets'          => strip_tags( $set ),
                'repetitions'   => strip_tags($request['repetitions'][$counter]),
                'level'         => ++$counter
            ]);
        }
        //Returns success
        return response()->json(array('success' => true));
    }

    public function saveCardioExercise(Request $request)
    {//Creates a new cardio standard record
        //Validates all inputs
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'bodyPart'      => 'required|numeric',
            'category'      => 'required|numeric',
            'times'          => 'required|array|min:1',
            'times.*'        => 'required',
            'distances'   => 'required|array|min:1',
            'distances.*' => 'required',
            'description'   => 'required',

        ]);
        if($validator->fails())
        {//If a input doesn't complete the requirements returns an error 
            return response()->json(array('success' => false, 'errors' => $validator->errors()));
        }
        //Creates a new Exercise model
        $exercise = new Exercise();
        //Puts data on
        $exercise->name = strip_tags( $request->name );
        $exercise->description = strip_tags( $request->description);
        $exercise->comments = strip_tags( $request->comments);
        $exercise->body_part_id = strip_tags( $request->bodyPart);
        $exercise->user_id = Auth::id();
        $exercise->type = "Cardio";
        $exercise->category_id = strip_tags( $request->category);
        //Saves new exercise
        $exercise->save();
        $counter = 0;
        foreach($request->times as $time)
        {//Create a new Strength standard record
            CardioStandards::create([
                'exercise_id'   => strip_tags($exercise->exercise_id),
                'time'          => strip_tags( $time ),
                'distance'      => strip_tags($request['distances'][$counter]),
                'level'         => ++$counter
            ]);
        }
        //Returns success
        return response()->json(array('success' => true));
    }

    public function showExercises()
    {
        $exercises = Exercise::where('user_id', Auth::id())
        ->orWhere('user_id', NULL)
        ->paginate(8);
        return view('exercises.showExercises', compact('exercises'));
    }

    public function exerciseDetail(Exercise $exercise)
    {
        return view('exercises.exerciseDetail', compact('exercise'));
    }
}
