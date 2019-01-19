<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesPlayedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games_played', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId1')->references('id')->on('users')->onDelete('cascade');
            $table->integer('userId2')->references('id')->on('users')->onDelete('cascade');
            $table->integer('gameId')->references('id')->on('games')->onDelete('cascade');
            $table->timestamp('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games_played');
    }
}
