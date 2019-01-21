@extends('layouts.master')

@section('main content')

    <link rel="stylesheet" href="/css/verify.css">

    <div class="verify">
        @foreach($comments as $comment)

            @php $user1=\App\User::find($comment->issuer) @endphp
            @php $user2=\App\User::find($comment->issuedTo) @endphp
            commenter: <p> {{ $user1->username }} </p>
            comment for: <p> {{ $user2->username }} </p>

            <p>{{$comment->content}}</p>

                @if(!$comment->isVerified)
                    <form method="POST" action="/verify_users_comments/{{$comment->id}}/accept">
                        {{ csrf_field() }}
                        <button class="btn btn-success inputs col-2" type="submit" style="margin-left: 15px; margin-top: 15px">ACCEPT</button>
                    </form>
                @else
                    <form method="POST" action="/verify_users_comments/{{ $comment->id }}/decline">
                        {{ csrf_field() }}
                        <button class="btn btn-danger inputs col-2" type="submit" style="margin-left: 15px; margin-top: 15px">DECLINE</button>
                    </form>
                @endif
        @endforeach
    </div>
@endsection