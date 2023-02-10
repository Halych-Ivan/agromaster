<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
//        $categories = Category::all();
//        $tags = Tag::all();
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }
}
