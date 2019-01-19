@extends('layouts.master')

@section('main content')

    <link rel="stylesheet" href="/css/profile.css" type="text/css">
    <div class="profile row">
        <div class="column left">

            Personal Info
            <form method="POST" action="/users/{{ $user->id }}">
                {{ csrf_field() }}
                @foreach ($user->getAttributes() as $key => $value)

                    @if($key == 'picture')
                        <img class="col-4" src="/images/users/{{ $value }}">
                        <br><br>

                    @elseif($key == 'username' || $key == 'firstName' || $key == 'lastName' || $key == 'gender'
                            || $key == 'birthday' || $key == 'email' || $key == 'password')
                        <div class="form-group col-6     inputs">
                            <label class="text-input-labels" for="{{ $key }}">{{ $key }}</label>
                            <input name="{{ $key }}" type="text" class="form-control" value="{{ $value }}">
                        </div>
                    @endif

                @endforeach
                <button class="btn btn-success inputs col-6" type="submit" value="SAVE" style="margin-left: 15px; margin-top: 15px">SAVE CHANGES</button>
            </form>
        </div>

        <div class="column right">
            <h1>Games</h1>
            <hr style="border-top: 2px solid green">
            <div class="up">
                <h3>Created</h3>
                @foreach($createdGames as $created)
                    <ul>
                        <li> Max Score: {{$created->maxScore}} </li>
                        <li> Zero Maker: {{$created->zeroMaker}} </li>
                        <li> Dice Numbers: {{$created->diceNumbers}} </li>
                        <li> Max Throws: {{$created->maxThrows}} </li>
                        <li> Stars: {{$created->stars}} </li>
                    </ul>
                    <hr style="border-top: 1px dot-dash greenyellow">
                @endforeach
            </div>
            <div class="down">
                <h3>Played</h3>
            </div>

        </div>

    </div>

@endsection
