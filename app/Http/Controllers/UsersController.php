<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function profile(){

        $user = Auth::user();
        $createdGames = \DB::table('users')
                        ->join('games', 'users.id', '=', 'games.userId')
                        ->select('games.*')
                        ->get();
//        dd($createdGames);
        return view('users.profile', compact('user'), compact('createdGames'));
    }
}
