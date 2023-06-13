<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;

class PersonalController extends Controller
{
    public function index()
    {
        $countPost = auth()->user()->likedPost()->count();
        return view('user.index', compact('countPost'));
    }

    public function edit(User $user){
        $countPost = auth()->user()->likedPost()->count();
        return view('user.edit', compact('user', 'countPost'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return redirect()->route('personal.index');
    }
}
