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
    </style>

    <div class="profile">
        <ul>

            <img src="/images/users/{{ $user->picture }}">
            <br><br>
            @foreach($user->getAttributes() as $key => $value)

                @if($key == 'username' || $key == 'firstName' || $key == 'lastName' || $key == 'gender'
                        || $key == 'birthday' || $key == 'email')
                    <li>{{ $key }} : {{ $value }}</li>
                @endif
            @endforeach
        </ul>

        @if(Auth::id() != $user->id)
            @foreach($friends as $friend)
                @if($friend->id == $user->id)
                    firend
                    @break
                @else
                    @continue
                @endif
                {{--<form method="POST" action="/users/{{$user->id}}/friend">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<button class="btn btn-success inputs col-2" type="submit" value="SAVE" style="margin-left: 15px;margin-bottom: 15px">ADD FRIEND</button>--}}
                {{--</form>--}}
            @endforeach
        @endif
    </div>

    <script>
        function isFriend(friend, friends) {
            for(let f in friends)
                if (friend === f)
                    console.log(true);
            console.log(false)
        }
    </script>

@endsection()