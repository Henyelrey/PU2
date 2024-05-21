<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('players',[PlayerController::class,'index']);
// Route::post('players',[PlayerController::class,'store']);
// Route::put('players/{player}',[PlayerController::class,'update']);
// // Route::get('players/{player}',[PlayerController::class,'show']);
// Route::delete('players/{player}',[PlayerController::class,'destroy']);


Route::get('teams',[TeamController::class,'index']);
Route::post('teams',[TeamController::class,'store']);
Route::put('teams/{team}',[TeamController::class,'update']);
Route::delete('teams/{team}',[TeamController::class,'destroy']);
