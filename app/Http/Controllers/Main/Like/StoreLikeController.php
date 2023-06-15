<?php

namespace App\Http\Controllers\Main\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreLikeController extends Controller
{
    public function store(Post $post)
    {
        auth()->user()->likedPost()->toggle($post->id);

        return redirect()->route('main.index');
    }
}
