@extends('admin.layouts.admin')

@section('title', 'Post')

@section('content')

<div class="container m-2">
        <h1 class="title">Post Edit</h1>
        <a class="btn btn-outline-primary" href="{{route('admin.blog.post.index')}}">Posts All</a>
        <a class="btn btn-outline-primary" href="{{route('admin.blog.post.create')}}">Create New</a>
        <hr>
    <form action="{{ route('admin.blog.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="single-form row">
            <label class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            @error('title')<div>{{$message}}</div>@enderror
        </div>

        <div class="single-form row mt-5">
            <label class="col-sm-2 col-form-label">Select Main Image</label>
            <div class="col-sm-8">
                <input class="mt-10" type="file" name="main_image">
                <img src="{{ asset('storage/'.$post->main_image) }}" width="50px" alt="{{ public_path($post->main_image) }}">
            </div>
        </div>

        <div class="single-form row mt-5">
            <label class="col-sm-2 col-form-label">Select Preview Image</label>
            <div class="col-sm-8">
                <input class="mt-10" type="file" name="preview_image">
                <img src="{{ asset('storage/'.$post->preview_image) }}" width="50px" alt="{{ $post->preview_image }}">
            </div>
        </div>

        <div class="single-form row mt-5">
            <label class="col-sm-2 col-form-label">Select Category</label>
            <div class="col-sm-8">
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option class="w-50" value="{{ $category->id }}" {{ $category->id == $post->category_id ? ' selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mt-5">
            <label class="col-sm-2 col-form-label">Select Tags</label>
            <div class="col-sm-8">
                <select class="js-example-basic-multiple form-control" name="tag_ids[]" multiple="multiple" data-placeholder="Select Tags" style="width: 100%">
                    @foreach($tags as $tag)
                        <option
                            {{ is_array( $post->tags->pluck('id')->toarray() ) && in_array($tag->id, $post->tags->pluck('id')->toarray() ) ? ' selected' : '' }}
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row mt-5">
            <div class="">
                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
            </div>
            @error('content')<div>{{$message}}</div>@enderror
        </div>

        <input class="main-btn mt-5" type="submit" value="Edit">

    </form>
</div>

@endsection
