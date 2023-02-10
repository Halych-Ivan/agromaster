@extends('admin.layouts.admin')
@section('title', 'Categories')

@section('content')

<div class="container m-2">
    <h1>Blog Categories</h1>
    <hr>

    <div class="">
        <form action="{{ route('admin.blog.category.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">New Category</label>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="col-sm-2">
                    <input class="btn btn-primary" type="submit" value="Create">
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-outline-primary" href="{{route('admin.blog.category.create')}}">Create New Category</a>
                </div>
            </div>
        </form>

        @error('title')
        <div>{{$message}}</div>
        @enderror
    </div>
    <hr>

    <table class="table mt-5">
        <tr>
            <th>N</th>
            <th>Title</th>
            <th>Active</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->title }}</td>
                <td>
                    <a href="{{ route('admin.blog.category.show', $category->id) }}" class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                    <a href="{{ route('admin.blog.category.edit', $category->id) }}" class="btn btn-outline-primary"><i class="far fa-pencil-alt"></i></a>
                </td>
            </tr>
        @endforeach
    </table>

</div>
@endsection
