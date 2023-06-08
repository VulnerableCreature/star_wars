<?php

namespace App\Http\Controllers\Admin\Interfaces\Trash;

interface UserTrashInterface
{
    public function index();
    public function restore(int $id);
    public function force(int $id);
}
