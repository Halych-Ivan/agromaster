@extends('admin.layouts.admin')
@section('title', 'Post')

@section('content')

<div class="container m-2">
    <h1 class="title">Create New Post</h1>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.post.index')}}">Posts All</a>
    <a class="btn btn-outline-primary disabled" href="{{route('admin.blog.post.create')}}">Create New</a>
    <hr>

    <div class="mt-5">
        <form action="{{ route('admin.blog.post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="single-form row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                </div>
                @error('title')<div>{{$message}}</div>@enderror
            </div>

            <div class="single-form row mt-5">
                <label class="col-sm-2 col-form-label">Select Main Image</label>
                <div class="col-sm-8">
                    <input class="mt-10" type="file" name="main_image">
                </div>
            </div>

            <div class="single-form row mt-5">
                <label class="col-sm-2 col-form-label">Select Preview Image</label>
                <div class="col-sm-8">
                    <input class="mt-10" type="file" name="preview_image">
                </div>
            </div>

            <div class="single-form row mt-5">
                <label class="col-sm-2 col-form-label">Select Category</label>
                <div class="col-sm-8">
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option class="w-50" value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : '' }}>
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
                                {{ is_array( old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }}
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row mt-5">
                <div class="">
                    <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                </div>
                @error('content')<div>{{$message}}</div>@enderror
            </div>
            <input class="btn btn-primary mt-5" type="submit" value="Create">
        </form>
    </div>



</div>

@endsection
