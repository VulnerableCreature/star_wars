<?php

namespace App\Http\Controllers\Admin\Interfaces\Trash;

use App\Models\Category;

interface CategoryTrashInterface
{
    public function index();
    public function restore(Category $category);
    public function force(Category $category);
}
