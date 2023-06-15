<?php

namespace App\Service\Admin\Interfaces;

use App\Models\Post;

interface PostInterface
{
    public static function store($data);
    public static function update($data, Post $post);
}
