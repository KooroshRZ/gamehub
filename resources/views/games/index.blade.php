@extends('layouts.master')
@section('main content')

    <link rel="stylesheet" href="/css/index_games.css">
    <ol>
        @foreach($games as $game)
            <div class="game">
                <img class="d-block w-25" src="/images/games/{{ $game->id }}.png" alt="game{{ $game->id }}">
                <ul>
                    <li>MAX SCORE: {{ $game->maxScore }}</li>
                    <li> ZERO MAKER: {{ $game->zeroMaker }}</li>
                    <li>DICE NUMBERS: {{ $game->diceNumbers }}</li>
                    <li>CREATOR: {{ $game->userId }}</li>
                </ul>
            </div>
        @endforeach
    </ol>

@endsection()