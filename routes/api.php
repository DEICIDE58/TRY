<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LifeHackController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hacks', [LifeHackController::class, 'getAll']);
Route::get('/hacks/random', [LifeHackController::class, 'getRandom']);
Route::get('/hacks/id/{id}', [LifeHackController::class, 'getById']);