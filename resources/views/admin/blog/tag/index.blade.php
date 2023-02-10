@extends('admin.layouts.admin')
@section('title', 'Tags')

@section('content')

<div class="container m-2">
    <h1>Blog Tags</h1>
    <hr>

    <div class="">
        <form action="{{ route('admin.blog.tag.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">New Tag</label>
                <div class="col-sm-6">
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="col-sm-2">
                    <input class="btn btn-primary" type="submit" value="Create">
                </div>
                <div class="col-sm-2">
                    <a class="btn btn-outline-primary" href="{{route('admin.blog.tag.create')}}">Create New Tag</a>
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
        @foreach($tags as $tag)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tag->title }}</td>
                <td>
                    <a href="{{ route('admin.blog.tag.show', $tag->id) }}" class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                    <a href="{{ route('admin.blog.tag.edit', $tag->id) }}" class="btn btn-outline-primary"><i class="far fa-pencil-alt"></i></a>
                </td>
            </tr>
        @endforeach
    </table>

</div>
@endsection
