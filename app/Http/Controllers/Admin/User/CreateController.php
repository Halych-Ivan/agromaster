<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
//        $categories = Category::all();
//        $tags = Tag::all();
        $roles = User::getRoles();
        return view('admin.user.create', compact('roles'));
    }
}
