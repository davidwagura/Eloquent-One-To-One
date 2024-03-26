<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikesController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function() {

    $users = User::all();
    $allbikes = Bike::all();
    
    return view('welcome');
});
Route::get('/users',[BikesController::class, 'usersWithBike']);
