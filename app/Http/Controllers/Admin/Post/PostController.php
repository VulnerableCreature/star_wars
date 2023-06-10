<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Interfaces\PostInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Service\Admin\Post\PostService;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller implements PostInterface
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        PostService::store($data);

        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $comments = $post->comments;
        return view('admin.post.show', compact('post', 'categories', 'tags', 'comments'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = PostService::update($data, $post);

        return redirect()->route('admin.post.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
