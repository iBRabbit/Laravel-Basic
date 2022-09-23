<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{

    public function index() {
        $title = "All Posts";
        if(request('search')) 
            $title = 'All Posts containing : ' . request('search');
        
        if(request('category')) 
            $title = 'All posts in category : ' . Category::firstWhere('slug', request('category')) -> name;
        
        
        if(request('author'))
            $title = 'All posts by : ' . User::firstWhere('username', request('author')) -> name;

        if(request())
        
        return view('posts', [
            "title" => $title,
            // "posts" => Post::latest() -> filter(request(['search', 'category', 'author'])) -> get(), // diganti jadi paginate 
            "posts" => Post::latest() -> filter(request(['search', 'category', 'author'])) -> paginate(7) -> withQueryString(),
            "active" => "post"
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => $post -> title,
            "post" => $post,
            "active" => "post"
        ]);
    }

}
