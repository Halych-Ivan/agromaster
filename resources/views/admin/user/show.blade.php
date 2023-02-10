@extends('admin.layouts.admin')
@section('title', 'Users')

@section('content')

<div class="container m-2">
    <h1>Blog Category </h1>
    <a class="btn btn-outline-primary" href="{{route('admin.user.index')}}">Users All</a>
    <a class="btn btn-outline-primary" href="{{route('admin.user.create')}}">Create User</a>
    <hr>

    <div class="d-flex align-items-center mt-5">
        <h3 class="mr-5">{{ $user->name }}</h3>
        <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-outline-primary m-3 disabled"><i class="far fa-eye"></i></a>
        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-outline-primary "><i class="far fa-pencil-alt"></i></a>
        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
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
            <td>{{ $user->id }}</td>

        </tr>
        <tr>
            <td>Name</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>{{ $user->password }}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>{{ $user->role }}</td>
        </tr>

    </table>

@endsection
