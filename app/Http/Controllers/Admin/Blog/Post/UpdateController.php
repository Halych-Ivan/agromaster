<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Blog\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        if(array_key_exists('preview_image', $data)){
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }
        if(array_key_exists('main_image', $data)) {
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }
        $post->update($data);
        $post->tags()->sync($tagIds);

        $categories = Category::all();

        return view('admin.blog.post.show', compact('post', 'categories'));
    }
}
