<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\RoutineExercise;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RoutineController extends Controller
{
    public function newRoutine()
    {
        return view('routines.newRoutine');
    }

    public function showRoutines()
    {
        $routines = Routine::where('user_id', Auth::id())
        ->paginate(4);
        return view('routines.showRoutines', compact('routines'));
    }

    public function saveRoutine(Request $request)
    {
        // Validates all inputs
        $validator = Validator::make($request->all(), [
            'name'              => 'required',
            'description'       => 'required',
            'exercises'         => 'required|array|min:1',
            'exercises.*'       => 'required|numeric|exists:exercises,exercise_id',

        ]);
        if($validator->fails())
        {//If a input doesn't complete the requirements returns an error 
            return response()->json(array('success' => false, 'errors' => $validator->errors()));
        }

        $routine = new Routine();

        $routine->name = strip_tags( $request->name);
        $routine->description = strip_tags( $request->description);
        $routine->user_id = Auth::id();

        $routine->save();

        foreach($request->exercises as $exercise)
        {//Create a new Strength standard record
            RoutineExercise::create([
                'routine_id'    => $routine->routine_id,
                'exercise_id'   => intval( strip_tags($exercise) ),
            ]);
        }

        //Returns success to the user
        return response()->json(array('success' => true));
    }

    public function routineDetails(Request $request)
    {
        $routine = Routine::where('routine_id', $request->routineId)
        ->select('routine_id', 'name', 'description')
        ->first();
        return view('routines.routineDetails', compact('routine'));
    }
}
