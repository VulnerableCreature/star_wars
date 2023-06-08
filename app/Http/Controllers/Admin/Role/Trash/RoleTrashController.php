<?php

namespace App\Http\Controllers\Admin\Role\Trash;

use App\Http\Controllers\Admin\Interfaces\Trash\RoleTrashInterface;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleTrashController extends Controller implements RoleTrashInterface
{
    public function index()
    {
        $roles = Role::onlyTrashed()->get();
        return view('admin.role.trash.index', compact('roles'));
    }

    public function restore(int $id)
    {
        $role = Role::onlyTrashed()->findOrFail($id);
        $role->restore();

        return redirect()->route('admin.role.trash.index');
    }

    public function force(int $id)
    {
        $role = Role::onlyTrashed()->findOrFail($id);
        $role->forceDelete();

        return redirect()->route('admin.role.trash.index');
    }
}
