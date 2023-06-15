<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\RoutineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/home', [HomeController::class, 'home'])->name('home');

//Exercise routes
Route::middleware(['auth'])->group( function()
{
    
    Route::prefix('/exercise')->group(function()
    {
        //New strength exercise form
        Route::get('/new-strength-exercise', [ExerciseController::class, 'newStrengthExercise'])->name('exercise.newStrengthExercise');
        //Save new strength exercise
        Route::post('/Save-strength-exercise', [ExerciseController::class, 'saveStrengthExercise'])->name('exercise.saveStrengthExercise');
        //New cardio exercise form
        Route::get('/new-cardio-exercise', [ExerciseController::class, 'newCardioExercise'])->name('exercise.newCardioExercise');
        //Save new cardio exercise
        Route::post('/Save-cardio-exercise', [ExerciseController::class, 'saveCardioExercise'])->name('exercise.saveCardioExercise');
        //Show exercises list
        Route::get('/Exercises-list', [ExerciseController::class, 'showExercises'])->name('exercise.showExercises');
        //Exercise details
        Route::get('/Exercise-details-{exercise}', [ExerciseController::class, 'exerciseDetail'])->name('exercise.exerciseDetail');
    });
});

Route::middleware(['auth'])->prefix('/activity')->group(function()
{
    Route::get('/Daily-activity', [ActivityController::class, 'dailyActivity'])->name('activity.dailyActivity');
    Route::post('/Save-Daily-activity', [ActivityController::class, 'saveDailyActivity'])->name('activity.SaveDaily');
});

Route::middleware(['auth'])->group(function(){
    Route::prefix('/routines')->group(function(){
        //New routine form
        Route::get('/new-routine', [RoutineController::class, 'newRoutine'])->name('routine.newRoutine');
        //Shows routine list
        Route::get('/routine-list', [RoutineController::class, 'showRoutines'])->name('routine.showRoutines');
        //Saves a new routine
        Route::post('/save-routine', [RoutineController::class, 'saveRoutine'])->name('routine.saveRoutine');
        //Show a specific routine
        Route::get('/Routine-details-{routineId}', [RoutineController::class, 'routineDetails'])->name('routine.routineDetail');
    });
});

//Profile routes
Route::middleware('auth')->group(function () {
    //Dashboard route
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('home.dashboard');
    //Profile route
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Profile update route
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Delete profile route
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
