@extends('admin.layouts.admin')
@section('title', 'Categories')

@section('content')

<div class="container m-2">
    <h1>Blog Category </h1>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.category.index')}}">Categories All</a>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.category.create')}}">Create New</a>
    <hr>

    <div class="d-flex align-items-center mt-5">
        <h3 class="mr-5">{{ $category->title }}</h3>
        <a href="{{ route('admin.blog.category.show', $category->id) }}" class="btn btn-outline-primary m-3 disabled"><i class="far fa-eye"></i></a>
        <a href="{{ route('admin.blog.category.edit', $category->id) }}" class="btn btn-outline-primary "><i class="far fa-pencil-alt"></i></a>
        <form action="{{ route('admin.blog.category.delete', $category->id) }}" method="POST">
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
            <td>{{ $category->id }}</td>

        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $category->title }}</td>
        </tr>

    </table>

@endsection
