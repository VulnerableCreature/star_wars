<?php

namespace App\Http\Controllers\Admin\Interfaces;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

interface PostInterface
{
    public function index();
    public function create();
    public function store(StoreRequest $request);
    public function show(Post $post);
    public function edit(Post $post);
    public function update(UpdateRequest $request, Post $post);
    public function destroy(Post $post);
}
