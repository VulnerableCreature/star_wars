<?php

namespace App\Http\Controllers\Admin\Post\Trash;

use App\Http\Controllers\Admin\Interfaces\Trash\PostTrashInterface;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostTrashController extends Controller implements PostTrashInterface
{
    public function index()
    {
        $posts = Post::onlyTrashed()->get();
        return view('admin.post.trash.index', compact('posts'));
    }

    public function restore(int $id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('admin.post.trash.index');
    }

    public function force(int $id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();

        return redirect()->route('admin.post.trash.index');
    }
}
