<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index() {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all() // Mengambil model Post dan method all() utk menampilkan semua postingan.
        ]);
    }

    public function show($slug) {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }

}