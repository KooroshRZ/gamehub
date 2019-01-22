@extends('layouts.master')

@section('main content')

    <style>
        .profile{
            margin: 10px;
            padding-top: 30px;
            font-size: 20px;
            background: #d7d3c5;
            border-radius: 5px 5px 5px 5px;
        }

        .column {
            float: left;
            padding: 10px;
        }

        .left {
            width: 40%;
            margin: 20px;
            background: #9cb9b9;
            border-radius: 5px 5px 5px 5px;
            font-size: 20px;
        }

        .right {
            width: 50%;
            margin: 20px;
            font-size: 20px;
            border-radius: 5px 5px 5px 5px;
            background: rgba(201, 222, 69, 0.82);
            padding: 30px;
        }

        /* Clear floats after the columns */
        .row:after {
            display: table;
            clear: both;
        }

    </style>

    <div class="profile row">
        <div class="column left">
        <ul>

            <img src="/images/users/{{ $user->picture }}" style="margin-top: 10px">
            <br><br>
            @foreach($user->getAttributes() as $key => $value)

                @if($key == 'username' || $key == 'firstName' || $key == 'lastName' || $key == 'gender'
                        || $key == 'birthday' || $key == 'email')
                    <li>{{ $key }} : {{ $value }}</li>
                @endif
            @endforeach
        </ul>

        @if(Auth::id() != $user->id)

            @php
                $isFriend = false;
                foreach ($friends as $friend){
                    if ($friend->userId2 == $user->id){
                        $isFriend = true;
                        break;
                    }
                }
            @endphp

            @if(!$isFriend)
                <form method="POST" action="/users/{{$user->id}}/friend">
                    {{ csrf_field() }}
                    <button class="btn btn-success inputs col-3" type="submit" value="SAVE" style="margin-left: 15px;margin-bottom: 15px">ADD FRIEND</button>
                </form>
            @endif

            @auth
                <form method="POST" action="/users/comments/{{$user->id}}">

                    {{ csrf_field() }}

                    <div class="form-group col-4 inputs">
                        <label class="text-input-labels" for="comment">COMMENT</label>
                        <textarea name="comment" rows="4" cols="40" style="border-radius: 5px 5px 5px 5px"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success inputs" style="margin-bottom: 15px; margin-left: 15px">SAVE COMMENT</button>
                </form>
            @endauth

        @endif
        </div>

        <div class="column right">
            <h3>COMMENTS</h3>
            <hr>
            @foreach($comments as $comment)
                <h5>BY: {{ \App\User::find($comment->issuer)->username }}</h5>
                <p>{{$comment->content  }}</p>
                <br>
            @endforeach
        </div>
    </div>

@endsection()