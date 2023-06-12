<?php

namespace App\Http\Controllers\Admin\User\Trash;

use App\Http\Controllers\Admin\Interfaces\Trash\UserTrashInterface;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserTrashController extends Controller implements UserTrashInterface
{
    public function index()
    {
        $users = User::onlyTrashed()->get();
        return view('admin.user.trash.index', compact('users'));
    }

    public function restore(int $id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->restore();

        return redirect()->route('admin.user.trash.index');
    }

    public function force(int $id)
    {
        $user = User::onlyTrashed()->findOrFail($id);
        $user->forceDelete();

        return redirect()->route('admin.user.trash.index');
    }
}
