<?php

namespace App\Http\Controllers\Main\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreCommentController extends Controller
{
    public function store(StoreRequest $request, Post $post)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;

        Comment::create($data);

        return redirect()->route('main.show', $post->id);
    }
}
