<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\Interfaces\PostInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class PostController extends Controller implements PostInterface
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate(['title' => $data['title']], [
            'title' => $data['title'],
            'content' => $data['content'],
        ]);
        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);

        return redirect()->route('admin.post.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
