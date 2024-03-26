<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\User;
use Illuminate\Http\Request;

class BikesController extends Controller
{
    //

    public function userBike()
    {
        // $user = User::findOrFail($id)->bike;
    
                // \Log::debug($user);

        $users = User::all();
        $allbikes = Bike::all();
    
        return response()->json([
            'allbikes' => $allbikes,
            'users' => $users
        ]);
    }
    

    // public function bikeUser(Request $request)
    // {
    //     $user_name = Bike::findOrFail($request->id)->user;

    //     return response()->json([
    //         'user_name' => $user_name,
    //     ]);

    
}
