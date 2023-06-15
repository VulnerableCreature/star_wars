<?php

namespace App\Http\Controllers\Admin\Interfaces;

use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

interface UserInterface
{
    public function index();
    public function create();
    public function store(StoreRequest $request);
    public function show(User $user);
    public function edit(User $user);
    public function update(UpdateRequest $request, User $user);
    public function destroy(User $user);
}
