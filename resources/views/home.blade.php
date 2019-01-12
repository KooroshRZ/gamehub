<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                /*color: #636b6f;*/
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 300px;
                margin: 0;
            }


            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
                padding: 100px;
            }

            .title {
                font-size: 84px;
            }

            .footer {
                margin-top: 200px;
                font-size: 20px;
                background: #1b1e21;
                color: #fff;
                alignment: center;

            }
            .footer img {
                width: 50px;
                height: 50px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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

            <div>
                <nav class="navbar navbar-expand-lg text-light bg-dark">
                    <a class="navbar-brand text-light" href="/">HOME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-light" href="/profile">PROFILE <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/start_game">START GAME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/design_game">DESIGN GAME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/users">USERS</a>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>

            <div class="content">

                <div class="title m-b-md">
                    Gamehub Project
                </div>

            </div>

            <div class="footer">
                <a href="https://github.com/KooroshRZ/">
                    <img src="/images/Octocat.png" >
                </a>
                <br>
                Kourosh Rajabzadeh 9331010
            </div>
        </div>
    </body>
</html>
