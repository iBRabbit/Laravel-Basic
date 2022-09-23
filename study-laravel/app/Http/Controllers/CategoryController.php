<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index() {
        return view('categories', [
            "title" => "Category Lists", 
            "categories" => Category::all(),
            "active" => "post"
        ]);
    }

    public function show(Category $category) {
        return view('posts', [
            'title' => "Post by category : $category->name",
            'posts' => $category->posts->load(['author', 'category']),
            'category' => $category->name,
            "active" => "post"
        ]);
    }

}
