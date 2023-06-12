<?php

namespace App\Http\Controllers\Admin\User\Role;

use App\Http\Controllers\Admin\Interfaces\UserRoleInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\Role\UpdateRequest;
use App\Models\Role;
use App\Models\User;

class RoleUserController extends Controller implements UserRoleInterface
{

    public function show(User $user)
    {
        $roles = Role::all();
        return view('admin.user.role.show', compact('user', 'roles'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('admin.user.role.edit', compact('user'));
    }
}
