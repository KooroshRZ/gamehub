@extends('layouts.master')


@section('main content')

    <link href="/css/home.css" rel="stylesheet" type="text/css">

    <div class="home">

        <div class="row">
            <div class="column left">
                best games
                <div class="most-played-games">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/images/games/1.png?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/images/games/2.png?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/images/games/3.png?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                Most Online Games
                <div class="most-online-games">
                    <div class="most-played-games">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/images/games/2.png?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/games/3.png?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/games/1.png?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                    Best New Games
                <div>
                    <div class="most-played-games">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/images/games/3.png?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/games/1.png?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/games/2.png?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column right">

                @auth
                    <div>

                        <h2>profile summary</h2>
                        <img src="/images/users/{{$authUser->picture}}">
                        <br><br>
                        <p>Username: {{ $authUser->username }}</p>
                        <p>Full Name : {{ $authUser->firstName }} {{ $authUser->lastName }}</p>
                        <p>Email: {{ $authUser->email }}</p>
                        <p>Total Games Played: {{ $authUser->gamesPlayed }}</p>
                        <p>Total Games Wined: {{ $authUser->gamesWined }}</p>
                        <p>stars: {{ $authUser->stars }}</p>
                        <a href="profile"><button class="btn btn-info inputs">PROFILE</button></a>
                    </div>
                    <br><br>
                @endauth
                <h2>Online Users</h2>
                <ul>

                    @foreach($friends as $friend)
                        <li> <a href="/users/{{ \App\User::find($friend->userId2)->username }}" style="color: red;">{{ \App\User::find($friend->userId2)->username }} </a></li>

                    @endforeach


                    @foreach($users as $user)

                        @foreach($friends as $friend)
                            @if($friend->userId2 == $user->id)
                                @php
                                    $user->id = Auth::id();
                                @endphp
                            @endif
                        @endforeach

                        @if(Auth::id() != $user->id)
                            <li> <a href="/users/{{$user->username}}" style="color: black;">{{ $user->username }} </a></li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>

    </div>

@endsection