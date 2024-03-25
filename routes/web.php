<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[BikesController::class, 'usersWithBike']);
