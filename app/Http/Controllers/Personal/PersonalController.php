<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;

class PersonalController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('personal.index');
    }
}
