@extends('admin.layouts.admin')

@section('title', 'Users')

@section('content')

    <div class="container m-2">
        <h1>Create User</h1>
        <a class="btn btn-outline-primary" href="{{route('admin.user.index')}}">Users All</a>
        <a class="btn btn-outline-primary disabled" href="{{route('admin.user.create')}}">Create User</a>
                <hr>

        <div class="mt-5">
            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                </div>
                @error('name')<div>{{$message}}</div>@enderror

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                </div>
                @error('email')<div>{{$message}}</div>@enderror

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="text" name="password" class="form-control">
                    </div>
                </div>
                @error('password')<div>{{$message}}</div>@enderror

                <div class="single-form row mt-5">
                    <label class="col-sm-2 col-form-label">Select Role</label>
                    <div class="col-sm-8">
                        <select name="role" class="form-control">
                            @foreach($roles as $id => $role)
                                <option class="w-50" value="{{ $id }}" {{ $id == old('role_id') ? ' selected' : '' }}>{{ $role }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group m-3">
                    <input class="btn btn-primary" type="submit" value="Create">
                </div>

            </form>
        </div>
    </div>

@endsection
