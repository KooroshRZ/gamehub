@extends('layouts.master')
@section('main content')

    @foreach($games as $game)
        <p>
        <ul>
            <li>{{ $game->id }}</li>
            <li>{{ $game->maxScore }}</li>
            <li>{{ $game->zeroMaker }}</li>
            <li>{{ $game->diceNumbers }}</li>
            <li>{{ $game->creator }}</li>
        </ul>
        </p>
    @endforeach

@endsection()