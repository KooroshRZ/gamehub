<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = \App\User::all()
            ->where('isOnline', '=', '1');
        $authUser = Auth::user();

        $friends = \DB::table('friends')
            ->where('userId1', '=', Auth::id())
            ->get();
//            ->join('friends', 'users.id', '=', 'friends.userId2')
//            ->select('friends.userId')
//            ->where('users.id', '=', 'users.userId1')
//            ->get();

//        dd($friends);

        return view('home', compact('users', 'friends', 'authUser'));
    }
}
