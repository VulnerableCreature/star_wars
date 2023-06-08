<?php

namespace App\Http\Controllers\Admin\Category\Trash;

use App\Http\Controllers\Admin\Interfaces\Trash\CategoryTrashInterface;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryTrashController extends Controller implements CategoryTrashInterface
{
    //
    public function index()
    {
        $categories = Category::onlyTrashed()->get();
        return view('admin.category.trash.index', compact('categories'));
    }

    public function restore(int $id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();

        return redirect()->route('admin.category.trash.index');
    }

    public function force(int $id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->forceDelete();

        return redirect()->route('admin.category.trash.index');
    }
}
