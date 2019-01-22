<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){

        $users = \App\User::all();
        return view('users.index', compact('users'));
    }

    public function profile(){

        $createdGames = \DB::table('users')
                        ->join('games', 'users.id', '=', 'games.creator')
                        ->select('games.*')
                        ->where('creator', '=', Auth::id())
                        ->get();

        $playedGames = \DB::table('games_played')
            ->where('userId1', '=', Auth::id())
            ->orWhere('userId2', '=', Auth::id())
            ->get();

        $user = Auth::user();

        return view('users.profile',
            compact('user', 'createdGames', 'playedGames'));
    }

    public function show($name){

        $user = \App\User::where('username', '=', $name)->first();

        $friends = \DB::table('friends')
            ->where('userId1', '=', Auth::id())
            ->get();

        $comments = \DB::table('users_comments')
            ->where('issuedTo', '=', $user->id)
            ->where('isVerified', '=', true)
            ->get();

        return view('users.show', compact('user', 'friends', 'comments'));

    }

    public function addFriend($id){

            \DB::table('friends')->insert([
                    'userId1' => Auth::id(),
                    'userId2' => $id
                ]
        );

        return redirect('/home');
    }

    public function update($id){

        $user = \App\User::find($id);
        $user->username = request('username');
        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->gender = request('gender');
        $user->birthday = request('birthday');

        $user->save();

        return redirect('/profile');

    }

    public function addComment($id){

        \DB::table('users_comments')->insert([
            'content' => request('comment'),
            'issuer' => Auth::id(),
            'issuedTo' => $id,
            'isVerified' => false
        ]);

        return redirect('/users/'.\App\User::find($id)->username);

    }
}
