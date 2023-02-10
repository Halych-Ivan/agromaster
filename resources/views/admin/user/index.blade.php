@extends('admin.layouts.admin')

@section('title', 'User')

@section('content')

    <div class="container m-2">
        <h1>Users</h1>
        <a class="btn btn-outline-primary disabled" href="{{route('admin.user.index')}}">Users All</a>
        <a class="btn btn-outline-primary" href="{{route('admin.user.create')}}">Create User</a>
        <hr>

{{--        <div class="">--}}
{{--            <form action="{{ route('admin.user.store') }}" method="POST">--}}
{{--                @csrf--}}
{{--                <div class="form-group row">--}}
{{--                    <label class="col-sm-2 col-form-label">New User</label>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <input type="text" name="title" class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-2">--}}
{{--                        <input class="btn btn-primary" type="submit" value="Create">--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-2">--}}
{{--                        <a class="btn btn-outline-primary" href="{{route('admin.user.create')}}">Create New User</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--            @error('title')<div>{{$message}}</div>@enderror--}}
{{--        </div>--}}
{{--        <hr>--}}

        <table class="table mt-5">
            <tr>
                <th>N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Active</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-outline-primary"><i class="far fa-eye"></i></a>
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-outline-primary"><i class="far fa-pencil-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

@endsection


