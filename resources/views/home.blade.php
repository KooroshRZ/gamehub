@extends('layouts.master')

@section('navbar')
<!--custom styles-->
<link rel="stylesheet" href="/css/home.css" type="text/css">

    @guest
        <li class="nav-item">
            <a class="nav-link text-light" href="/games">GAMES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/login">LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/register">REGISTER</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link text-light" href="/users">
                {{{ isset(Auth::user()->username) ? Auth::user()->username : Auth::user()->email }}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/users">USERS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/users">GAMES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/logout">LOGOUT</a>
        </li>
    @endguest

    {{--admin--}}
        {{--<li class="nav-item active">--}}
            {{--<a class="nav-link text-light" href="/verify_games_comments">VERIFY GAMES COMMENTS <span class="sr-only">(current)</span></a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link text-light" href="/verify_sers_comments">VERIFY USERS COMMENTS</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link text-light" href="/games">ALL GAMES</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link text-light" href="/games/create">DESIGN GAME</a>--}}
        {{--</li>--}}

@endsection