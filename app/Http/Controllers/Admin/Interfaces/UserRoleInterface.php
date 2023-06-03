<?php

namespace App\Http\Controllers\Admin\Interfaces;

use App\Http\Requests\Admin\User\Role\UpdateRequest;
use App\Models\User;

interface UserRoleInterface
{
    public function show(User $user);

    public function update(UpdateRequest $request, User $user);
}
