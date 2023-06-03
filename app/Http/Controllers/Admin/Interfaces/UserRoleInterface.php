<?php

namespace App\Http\Controllers\Admin\Interfaces;

use App\Http\Requests\Admin\User\Role\UpdateRoleRequest;
use App\Models\User;

interface UserRoleInterface
{
    public function showUserRole(User $user);

    public function updateUserRole(UpdateRoleRequest $request, User $user);
}
