<?php

namespace App\Http\Controllers\Admin\Interfaces;

use App\Http\Requests\Admin\Role\StoreRequest;
use App\Http\Requests\Admin\Role\UpdateRequest;
use App\Models\Role;

interface RoleInterface
{
    public function index();
    public function create();
    public function store(StoreRequest $request);
    public function show(Role $role);
    public function edit(Role $role);
    public function update(UpdateRequest $request, Role $role);
    public function destroy(Role $role);
}
