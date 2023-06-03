<?php

namespace App\Service\Admin\Interfaces;

use App\Models\Category;

interface CategoryInterface
{
    public function store();
    public function update(Category $category);
    public function destroy(Category $category);
}
