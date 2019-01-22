<?php

namespace App\Http\Controllers;

use App\games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    public function index(){

        $games = \App\Games::all();
        return view('games.index', compact('games'));

    }

    public function show($id){

        $game = \App\Games::where('id', '=', $id)->first();
        $comments = \DB::table('games_comments')
            ->where('issuedTo', '=', $game->id)
            ->where('isVerified', '=', true)
            ->get();


        return view('games.show', compact('game', 'comments'));

    }


    public function create(){
        return view('games.create');
    }

    public function store(){

        Games::create([
            'maxScore' => request('maxScore'),
            'zeroMaker' => request('zeroMaker'),
            'diceNumbers' => request('diceNumbers'),
            'maxThrows' => request('maxThrows'),
            'userId'=> Auth::id(),
            'stars' => 0,
            'isPlaying' => false
        ]);

//        Games::create(request()->all());

//        $game = new \App\Games();
//        $game->maxScore = request('maxScore');
//        $game->zeroMaker = request('zeroMaker');
//        $game->diceNumbers = request('diceNumbers');
//        $game->maxThrows = request('maxThrows');
//        $game->creator = "Kourosh";
//
//        $game->save();

        return redirect('games/create');

    }

    public function addComment($id){

        \DB::table('games_comments')->insert([
            'content' => request('comment'),
            'issuer' => Auth::id(),
            'issuedTo' => $id,
            'isVerified' => false
        ]);

        return redirect('/games/'.$id);
    }

}
