<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikesController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/', [BikesController::class, 'userBike']);

Route::get('/users', [BikesController::class, 'bikeUser']);

Route::get('/bikes', [BikesController::class, 'bikeUser']);
