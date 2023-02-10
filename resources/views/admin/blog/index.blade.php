@extends('admin.layouts.index')

@section('title', 'Blog+')

@section('content')
<div class="container mt-150">
    <nav class="mt-40">
        <ul>
            <li>
                <a href="{{route('admin.blog.category.index')}}"><i class="fa fa-th-list"></i> Categories</a>
            </li>
            <li>
                <a href="{{route('admin.blog.tag.index')}}"><i class="fa fa-tags"></i> Tags</a>
            </li>
            <li>
                <a href="{{route('admin.blog.post.index')}}"><i class="fa fa-clipboard"></i> Posts</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
