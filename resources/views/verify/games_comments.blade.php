@extends('layouts.master')

@section('main content')

    <link rel="stylesheet" href="/css/verify.css">

    <div class="verify">
        @foreach($comments as $comment)

            @php $user=\App\User::find($comment->issuer) @endphp
            @php $game=\App\Games::find($comment->issuedTo) @endphp
            commenter: {{ $user->username }}
            comment for game ID: {{ $game->id }}

            <p>{{$comment->content}}</p>

            @if(!$comment->isVerified)
                <form method="POST" action="/verify_games_comments/{{$comment->id}}/accept">
                    {{ csrf_field() }}
                    <button class="btn btn-success inputs col-2" type="submit" style="margin-left: 15px; margin-top: 15px">ACCEPT</button>
                </form>
            @else
                <form method="POST" action="/verify_games_comments/{{ $comment->id }}/decline">
                    {{ csrf_field() }}
                    <button class="btn btn-danger inputs col-2" type="submit" style="margin-left: 15px; margin-top: 15px">DECLINE</button>
                </form>
            @endif
        @endforeach
    </div>
@endsection