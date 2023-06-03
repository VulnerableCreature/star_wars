<?php

namespace App\Service\Admin\Interfaces;

use App\Models\Tag;

interface TagInterface
{
    public function store();
    public function update(Tag $tag);
    public function destroy(Tag $tag);
}
