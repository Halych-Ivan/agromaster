@extends('admin.layouts.admin')

@section('title', 'Post')

@section('content')

<div class="container m-2" >
    <h1>Blog Posts Show</h1>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.post.index')}}">Posts All</a>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.post.create')}}">Create New</a>
    <hr>

    <div class="d-flex align-items-center mt-5">
        <h3 class="mr-5">{{ $post->title }}</h3>
        <a href="{{ route('admin.blog.post.show', $post->id) }}" class="btn btn-outline-primary m-3 disabled"><i class="far fa-eye"></i></a>
        <a href="{{ route('admin.blog.post.edit', $post->id) }}" class="btn btn-outline-primary "><i class="far fa-pencil-alt"></i></a>
        <form action="{{ route('admin.blog.post.delete', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger m-3">
                <i class="far fa-trash" role="button"></i>
            </button>
        </form>
    </div>

    <table class="table">
        <tr>
            <td>ID</td>
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $post->title }}</td>
        </tr>
        <tr>
            <td>Content</td>
            <td>{{ $post->content }}</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                @foreach($categories as $category)
                    {{ $category->id == $post->category_id ? $category->title : '' }}
                @endforeach
            </td>
        </tr>
        <tr>
            <td>Main Image</td>
            <td><img src="{{ asset('storage/'.$post->main_image) }}" alt="{{ $post->main_image }}" height="100px"></td>
        </tr>
        <tr>
            <td>Main Preview</td>
            <td><img src="{{ asset('storage/'.$post->preview_image) }}" alt="{{ $post->preview_image }}" height="100px"></td>
        </tr>
        <tr>
            <td>Tags</td>
            <td>
                @foreach($post->tags as $tag)
                    {{ $tag->title }}<br>
                @endforeach
            </td>
        </tr>

    </table>

@endsection
