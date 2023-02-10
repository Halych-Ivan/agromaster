@extends('admin.layouts.admin')
@section('title', 'Tags')

@section('content')

<div class="container mt-150">
    <h1>Blog Tag Edit</h1>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.tag.index')}}">Tags All</a>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.tag.create')}}">Create New</a>
    <hr>

    <div class="mt-5">
        <form action="{{ route('admin.blog.tag.update', $tag->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-8">
                    <input name="title" class="form-control" placeholder="" value="{{ $tag->title }}">
                </div>
            </div>
            <div class="form-group m-3">
                <input class="btn btn-primary" type="submit" value="Edit">
            </div>
        </form>
        @error('title')
        <div>{{$message}}</div>
        @enderror
    </div>

</div>

@endsection
