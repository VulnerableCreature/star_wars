<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class LikedController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->likedPost;
        $countPost = auth()->user()->likedPost()->count();
        return view('user.liked.index', compact('posts', 'countPost'));
    }

    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $comments = $post->comments;
        $countPost = auth()->user()->likedPost()->count();
        return view('user.liked.show', compact('post', 'categories', 'tags', 'comments', 'countPost'));
    }

    public function destroy(Post $post)
    {
        auth()->user()->likedPost()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
