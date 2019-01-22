@extends('layouts.master')

@section('main content')

    <style>
        .profile{
            margin: 10px;
            padding-top: 30px;
            font-size: 20px;
            background: #d7ccd2;
            border-radius: 5px 5px 5px 5px;
        }

        .column {
            float: left;
            padding: 30px;
        }

        .left {
            width: 40%;
            margin: 20px;
            background: #88b994;
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


    <div class="row profile">
        <div class="column left">
            <img src="/images/games/{{ $game->id }}.png" width="400px" height="300px">
            <ul>
                <li> CREATOR : {{ $game->creator }} </li>
                <li> MAX SCORE : {{ $game->maxScore }} </li>
                <li> ZERO MAKER : {{ $game->zeroMaker }} </li>
                <li> DICE NUMBERS : {{ $game->diceNumbers }} </li>
                <li> MAX THROWS : {{ $game->maxThrows }} </li>
                <li> STARS : {{ $game->stars }} </li>
                <li> IS PLAYING : {{ $game->isPlaying == true ? 'yes' : 'no' }} </li>
            </ul>

            <div>
                <form method="POST" action="/games/comments/{{$game->id}}">

                    {{ csrf_field() }}

                    <div class="form-group col-4 inputs">
                        <label class="text-input-labels" for="comment">COMMENT</label>
                        <textarea name="comment" rows="4" cols="40" style="border-radius: 5px 5px 5px 5px"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success inputs" style="margin-bottom: 15px; margin-left: 15px">SAVE COMMENT</button>
                </form>
            </div>
        </div>

        <div class="column right">
            <h3>COMMENTS:</h3>
            <hr>
            @foreach($comments as $comment)
                <h4>BY: {{ \App\User::find($comment->issuer)->username }}</h4>
                <p>{{ $comment->content }}</p>
            @endforeach

        </div>
    </div>


@endsection