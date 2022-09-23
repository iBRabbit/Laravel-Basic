<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index() {
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::with(['author', 'category'])->latest() -> get() // Mengambil model Post dan method all() utk menampilkan semua postingan.
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

}
