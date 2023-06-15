<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use App\Models\Workout;
use App\Models\WorkoutExercise;


class ActivityController extends Controller
{
    public function dailyActivity(){
        return view('activity.dailyActivity');
    }

    public function saveDailyActivity(Request $request)
    {//Validates inputs
        $validator = Validator::make($request->all(), [
            'exercises'         => 'required|array|min:1',
            'exercises.*'       => 'required|numeric|exists:exercises,exercise_id',
            'sets'              => 'required|array|min:1',
            'sets.*'            => 'required',
            'repetitions'       => 'required|array|min:1',
            'repetitions.*'     => 'required'
        ]);
        if($validator->fails())
        {//If a input doesn't complete the requirements returns an error 
            return response()->json(array('success' => false, 'errors' => $validator->errors()));
        }
        $date = Carbon::now()->toDateString();
        //Creates a new workout and saves it
        $workout = new Workout();
        $workout->user_id = Auth::id();
        $workout->date = $date;

        $workout->save();

        $index = 0;
        foreach($request->exercises as $exercise)
        {//Create a new Strength standard record
            WorkoutExercise::create([
                'workout_id'        => $workout->workout_id,
                'sets'              => $request['sets'][$index],
                'repetitions'       => $request['repetitions'][$index],
                'exercise_id'       => $exercise
            ]);
            $index++;
        }
        return response()->json(array('success' => true));
    }
}
