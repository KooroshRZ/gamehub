<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gameId')->unsigned();
            $table->foreign('gameId')->references('id')->on('games')->onDelete('cascade');
            $table->text('content');
            $table->boolean('isVerified');
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
        Schema::dropIfExists('games_comments');
    }
}
