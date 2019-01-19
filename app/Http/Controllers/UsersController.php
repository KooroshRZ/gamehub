<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Compound;

class UsersController extends Controller
{
    public function profile(){

        $createdGames = \DB::table('users')
                        ->join('games', 'users.id', '=', 'games.userId')
                        ->select('games.*')
                        ->where('userId', '=', Auth::id())
                        ->get();

        $playedGames = \DB::table('games_played')
            ->where('userId1', '=', Auth::id())
            ->orWhere('userId2', '=', Auth::id())
            ->get();

        $friends = \DB::table('users')
                        ->join('friends', 'users.id', '=', 'friends.userId1')
                        ->select('users.*')
                        ->where('userId1', '=', Auth::id())
                        ->orWhere('userId2', '=', Auth::id())
                        ->get();

        $user = Auth::user();

        dd($friends);

        return view('users.profile',
            compact('user', 'createdGames', 'playedGames', 'friends'));
    }

    public function show($name){

//        dd($name);
        $user = \App\User::where('username', '=', $name)->first();

        return view('users.show', compact('user'));

    }

    public function addFriend($id){
        \DB::table('friends')->insert([
                'userId1' => Auth::id(),
                'userId2' => $id
            ]
        );

        return redirect('/home');
    }
}
