<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('main.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $comments = $post->comments;
        return view('main.show', compact('post', 'categories', 'tags', 'comments'));
    }
}
