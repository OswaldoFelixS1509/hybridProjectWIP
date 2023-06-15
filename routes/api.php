<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Routine;
Use App\Http\Controllers\RoutineController;
use App\Http\Resources\RoutineCollection;
use App\Http\Resources\RoutineResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//API TEST CASE 1
Route::get('/routines', function(Routine $routine)
{   
    return new RoutineCollection(Routine::select('routine_id', 'name')->get());
});

Route::get('/routine/{routine}', function (Routine $routine){
    return new RoutineResource($routine);
});