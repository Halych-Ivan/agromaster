<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{

    public function __invoke(Post $post)
    {
//        dd($post);

        $categories = Category::all();
        $categoriesCount = $categories->count();


        if(isset($post)){
            return view('edumate.blog.post', compact('post', 'categories', 'categoriesCount'));
        }


        $data = '';



        return view('edumate.blog', compact('data'));
    }


}
