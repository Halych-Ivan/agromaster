@extends('admin.layouts.admin')
@section('title', 'Post')

@section('content')

<div class="container m-2" >
    <h1>Blog Posts</h1>
    <a class="btn btn-outline-primary disabled" href="{{route('admin.blog.post.index')}}">Posts All</a>
    <a class="btn btn-outline-primary" href="{{route('admin.blog.post.create')}}">Create New</a>
    <hr>

    <table class="table">
        <tr>
            <th>N</th>
            <th>Title</th>
            <th>Category</th>
            <th>Content</th>
            <th>Preview Image</th>
            <th>Main Image</th>
            <th>Active</th>
            <th>Active</th>
            <th>Active</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @foreach($categories as $category)
                        {{ $category->id == $post->category_id ? $category->title : '' }}
                    @endforeach
                </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td><img src="{{ asset('storage/'.$post->preview_image) }}" alt="{{ $post->preview_image }}" height="100px"></td>
                <td><img src="{{ asset('storage/'.$post->main_image) }}" alt="{{ $post->main_image }}" height="100px"></td>
                <td><a href="{{ route('admin.blog.post.show', $post->id) }}"><i class="far fa-eye"></i></a></td>
                <td><a href="{{ route('admin.blog.post.edit', $post->id) }}"><i class="far fa-pencil-alt"></i></a></td>
                <td>
                    <form action="{{ route('admin.blog.post.delete', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <i class="far fa-trash text-danger" role="button"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a class="btn btn-outline-primary" href="{{route('admin.blog.post.create')}}">Create New</a>

</div>

@endsection
