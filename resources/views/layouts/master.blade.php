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
        <a class="navbar-brand text-light" href="/">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @yield('navbar')
            </ul>
        </div>
    </nav>

    {{--@yield('main content')--}}


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
