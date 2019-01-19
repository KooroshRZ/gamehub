@extends('layouts.master')


@section('main content')

    <link href="/css/home.css" rel="stylesheet" type="text/css">

    <div class="home">
        @guest

        @else

        @endguest
    </div>

@endsection