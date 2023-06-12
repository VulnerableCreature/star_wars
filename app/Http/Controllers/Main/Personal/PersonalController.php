<?php

namespace App\Http\Controllers\Main\Personal;

use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
