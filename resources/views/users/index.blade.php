@extends('layouts.master')

@section('main content')

    <link rel="stylesheet" href="/css/index_users.css">

    <ol>
        @foreach($users as $user)
            <div class="user">
                <img class="d-block w-25" src="/images/users/{{ $user->username }}.jpg" alt="{{$user->username}}" style="border-radius: 5px 5px 5px 5px">
                <br>
                <ul>
                    <li> USERNAME: <a href="/users/{{ $user->username }}">{{ $user->username }}</li></a>
                    <li>stars: {{ $user->stars }}</li>
                    <li>TOTAL GAMES PLAYED: {{ $user->gamesPlayed }}</li>
                    <li>TOTAL GAMES WINED: {{ $user->gamesWined }}</li>
                </ul>
            </div>
        @endforeach
    </ol>
@endsection