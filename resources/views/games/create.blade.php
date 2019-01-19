@extends('layouts.master')
@section('main content')

    <link rel="stylesheet" href="/css/create_game.css" type="text/css">

    <div class="main">
        <form method="POST" action="/games">

            {{ csrf_field() }}

            <div class="form-group col-4 inputs">
                <label class="text-input-labels" for="maxScore">1: MAX SCORE</label>
                <input name="maxScore" type="text" class="form-control" placeholder="100">
            </div>

            <div class="form-group col-4 inputs">
                <label class="text-input-labels" for="currentScore">2: ZERO MAKER NUMBERS</label>
                <div class="form-group">
                    <label class="btn btn-info">
                        <input type="radio" name="zeroMaker" value="1" autocomplete="off"> 1
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="zeroMaker" value="2" autocomplete="off"> 2
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="zeroMaker" value="3" autocomplete="off"> 3
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="zeroMaker" value="4" autocomplete="off"> 4
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="zeroMaker" value="5" autocomplete="off"> 5
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="zeroMaker" value="6" autocomplete="off"> 6
                    </label>
                </div>
            </div>

            <div class="form-group col-3 inputs">

                <label class="text-input-labels" for="diceNums">3: DICE NUMBERS</label>
                <br>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-info">
                        <input type="radio" name="diceNumbers" value="1" autocomplete="off"> 1
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="diceNumbers" value="2" autocomplete="off"> 2
                    </label>
                    <label class="btn btn-info">
                        <input type="radio" name="diceNumbers" value="4" autocomplete="off"> 4
                    </label>
                </div>

            </div>

            <div class="form-group col-3 inputs">
                <label class="text-input-labels" for="maxThrows">1: MAX THROWS</label>
                <input name="maxThrows" type="text" class="form-control" placeholder="10">
            </div>

            <button type="submit" class="btn btn-success inputs" style="margin-left: 10px; margin-top: 10px">SAVE</button>
        </form>
    </div>
@endsection