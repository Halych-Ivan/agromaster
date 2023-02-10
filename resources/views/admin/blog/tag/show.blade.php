@extends('admin.layouts.admin')
@section('title', 'Tags')

@section('content')

<div class="container m-2">
    <h1>Blog Tag Show</h1>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.tag.index')}}">Tags All</a>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.tag.create')}}">Create New</a>
    <hr>

    <div class="d-flex align-items-center">
        <h3 class="mr-5">{{ $tag->title }}</h3>
        <a href="{{ route('admin.blog.tag.show', $tag->id) }}" class="btn btn-outline-primary m-3 disabled"><i class="far fa-eye"></i></a>
        <a href="{{ route('admin.blog.tag.edit', $tag->id) }}" class="btn btn-outline-primary "><i class="far fa-pencil-alt"></i></a>
        <form action="{{ route('admin.blog.tag.delete', $tag->id) }}" method="POST">
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
            <td>{{ $tag->id }}</td>

        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $tag->title }}</td>
        </tr>

    </table>

@endsection
