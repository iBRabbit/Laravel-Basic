<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show(User $author) {
        return view('posts', [
            'title' => 'Post by author : ' .  $author->name,
            'posts' => $author -> posts -> load(['category', 'author']),
            'active' => 'post'
        ]);
    }
    
}
