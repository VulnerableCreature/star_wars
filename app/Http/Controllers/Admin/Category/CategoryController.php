<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\Interfaces\CategoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller implements CategoryInterface
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate(['title' => $data['title']]);
        return redirect()->route('admin.category.index');
    }

    public function show(Category $category)
    {
        $dateCreated = Carbon::parse($category->created_at);
        $dateUpdated = Carbon::parse($category->updated_at);
        return view('admin.category.show', compact('category', 'dateCreated', 'dateUpdated'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);

        return redirect()->route('admin.category.show', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
