<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gamehub</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--custom styles-->
    <link rel="stylesheet" href="/css/master.css" type="text/css">

</head>
<body>
    {{--@if (Route::has('login'))--}}
    {{--<div class="top-right links">--}}
    {{--@auth--}}
    {{--<a href="{{ url('/home') }}">Home</a>--}}
    {{--@else--}}
    {{--<a href="{{ route('login') }}">Login</a>--}}

    {{--@if (Route::has('register'))--}}
    {{--<a href="{{ route('register') }}">Register</a>--}}
    {{--@endif--}}
    {{--@endauth--}}
    {{--</div>--}}
    {{--@endif--}}

    <nav class="navbar navbar-expand-lg text-light bg-dark">
        <a class="navbar-brand text-light" href="/home">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
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
                    @if(isset(Auth::user()->username) && Auth::user()->username == 'admin')
                        <li class="nav-item active">
                            <a class="nav-link text-light" href="/verify_games_comments">VERIFY GAMES COMMENTS <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/verify_sers_comments">VERIFY USERS COMMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/games">ALL GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/games/create">DESIGN GAME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/logout">LOGOUT</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/profile">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/users">USERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/games">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/logout">LOGOUT</a>
                        </li>
                    @endif
                @endguest
            </ul>
        </div>
    </nav>

    <div class="main">
        @yield('main content')
    </div>


    <div class="footer">
        <a href="https://github.com/KooroshRZ/gamehub">
            <img src="/images/Octocat.png" >
        </a>
        <br>
        Kourosh Rajabzadeh
        9331010
    </div>
</body>
</html>
