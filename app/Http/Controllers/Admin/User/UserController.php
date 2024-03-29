<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\Interfaces\UserInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// TODO: Реализовать интерфейс для работы с удалёнными записями, SoftDeletes - TagTrashedInterface
class UserController extends Controller implements UserInterface
{
    public function index()
    {
        $users = User::all()->sortBy("name");
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate(['email' => $data['email'], 'login' => $data['login']], $data);
        return redirect()->route('admin.user.index');
    }

    public function show(User $user)
    {
        $roles = Role::all();
        return view('admin.user.show', compact('user', 'roles'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('admin.user.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
