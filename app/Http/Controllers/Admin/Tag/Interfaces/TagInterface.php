<?php

namespace App\Http\Controllers\Admin\Tag\Interfaces;

use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;

interface TagInterface
{
    public function index();
    public function create();
    public function store(StoreRequest $request);
    public function show(Tag $tag);
    public function edit(Tag $tag);
    public function update(UpdateRequest $request, Tag $tag);
    public function destroy(Tag $tag);
}