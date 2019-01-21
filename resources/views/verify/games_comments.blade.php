@extends('layouts.master')

@section('main content')

    <link rel="stylesheet" href="/css/verify.css">

    <div class="verify">
        @foreach($comments as $comment)

                <h3>@php \App\User::find($comment->issuer) @endphp</h3>
                <h3>@php \App\User::find($comment->issuedTo) @endphp</h3>
                <p>$comment->content</p>
            <form method="POST" action="/users/{{ $user->id }}">
                {{ csrf_field() }}
                @if(!$comment->isVerified)
                    <button class="btn btn-success inputs col-6" type="submit" value="SAVE" style="margin-left: 15px; margin-top: 15px">ACCEPT</button>
                @else
                    <button class="btn btn-success inputs col-6" type="submit" value="SAVE" style="margin-left: 15px; margin-top: 15px">DECLINE</button>
                @endif
            </form>
        @endforeach
    </div>
@endsection