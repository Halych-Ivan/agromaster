@extends('admin.layouts.admin')
@section('title', 'Tags')

@section('content')

<div class="container m-2">
    <h1>Blog Tags</h1>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.tag.index')}}">Tags All</a>
    <hr>

    <div class="mt-5">
        <form action="{{ route('admin.blog.tag.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
            <div class="form-group m-3">
                <input class="btn btn-primary" type="submit" value="Create">
            </div>

        </form>
        @error('title')
        <div>{{$message}}</div>
        @enderror
    </div>

</div>

@endsection
