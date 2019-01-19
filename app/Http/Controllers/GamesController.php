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

    public function show(\App\Games $game){

//        $game = \App\Games::FindOrFail($id);\
        return $game;

//        return view('games.show', compact('game'));

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

}
