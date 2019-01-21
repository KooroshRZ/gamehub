<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function indexUsers(){

        $comments = \DB::table('users_comments')->get();
        return view('verify.users_comments', compact('comments'));
    }

    public function indexGames(){
        return view('verify.games_comments');
    }

    public function acceptUserComment($id){
        \DB::table('users_comments')
            ->where('id', $id)
            ->update(['isVerified' => true]);

        return redirect('/verify_users_comments/');
    }

    public function declineUserComment($id){
        \DB::table('users_comments')
            ->where('id', $id)
            ->update(['isVerified' => false]);

        return redirect('/verify_users_comments/');
    }

    public function acceptGameComment(){

    }

    public function declineGameComment(){

    }
}
