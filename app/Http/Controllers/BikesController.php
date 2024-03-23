<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\User;
use Illuminate\Http\Request;

class BikesController extends Controller
{
    //

    public function usersWithBike()
    {

        $user_1_bike = User::find(1)->bike;
        $user_3_bike = User::find(3)->bike;
        $user_1_name = Bike::find(1)->user;
        $user_2_name = Bike::find(2)->user;
        //dd($user_2_bike);

        $users = User::all();
        $allbikes = Bike::all();
        return view('index',compact('users','allbikes','user_1_bike',
        'user_3_bike','user_1_name','user_2_name'));
    }
}