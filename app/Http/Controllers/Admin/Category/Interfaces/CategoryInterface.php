<?php

namespace App\Http\Controllers\Admin\Category\Interfaces;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

interface CategoryInterface
{
    public function index();
    public function create();
    public function store(StoreRequest $request);
    public function show(Category $category);
    public function edit(Category $category);
    public function update(UpdateRequest $request, Category $category);
    public function destroy(Category $category);
}