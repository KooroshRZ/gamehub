@extends('layouts.master')
@section('main content')

    <link rel="stylesheet" href="/css/create_game.css" type="text/css">

    <div class="content">
        <form method="POST" action="/games/create">

            <div class="form-group col-3 inputs">
                <label class="text-input-labels" for="maxScore">1: MAX SCORE</label>
                <input type="text" class="form-control" id="maxScore" placeholder="100">
            </div>

            <div class="form-group col-3 inputs">
                <label class="text-input-labels" for="currentScore">2: CURRENT SCORE</label>
                <input type="text" class="form-control" id="currentScore" placeholder="0">
            </div>

            <div class="form-group inputs">

                <label class="text-input-labels" for="diceNums">3: DICE NUMBERS</label>
                <br>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option1" autocomplete="off"> 1
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" autocomplete="off"> 2
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> 3
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> 4
                    </label>
                </div>

            </div>

            <button type="submit" class="btn btn-success inputs" style="margin-left: 10px; margin-top: 10px">SAVE</button>
        </form>
    </div>
@endsection