<?php

namespace App\Http\Controllers\Admin\Tag\Trash;

use App\Http\Controllers\Admin\Interfaces\Trash\TagTrashInterface;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagTrashController extends Controller implements TagTrashInterface
{
    //
    public function index()
    {
        $tags = Tag::onlyTrashed()->get();
        return view('admin.tag.trash.index', compact('tags'));
    }

    public function restore(int $id)
    {
        $tag = Tag::onlyTrashed()->findOrFail($id);
        $tag->restore();

        return redirect()->route('admin.tag.trash.index');
    }

    public function force(int $id)
    {
        $category = Tag::onlyTrashed()->findOrFail($id);
        $category->forceDelete();

        return redirect()->route('admin.tag.trash.index');
    }
}
