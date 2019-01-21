<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issuer')->unsigned();
            $table->foreign('issuer')->references('id')->on('users')->onDelete('cascade');
            $table->integer('issuedTo')->unsigned();
            $table->foreign('issuedTo')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('users_comments');
    }
}
