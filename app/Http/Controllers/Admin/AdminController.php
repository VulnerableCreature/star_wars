<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [];
        $data['userCount'] = User::all()->count();
        $data['tagCount'] = Tag::all()->count();
        $data['categoryCount'] = Category::all()->count();
        $data['postCount'] = Post::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
