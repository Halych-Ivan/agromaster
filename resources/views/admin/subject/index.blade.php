@extends('admin.layouts.admin')

@section('title', 'Subject All')

@section('content')

    <div class="container m-2">
        <h1>Предмети</h1>
        <a class="btn btn-outline-primary active" href="{{route('admin.subject.index')}}">Всі предмети</a>
        <a class="btn btn-outline-primary" href="{{route('admin.subject.create')}}">Додати</a>
        <hr>

        <div>
            <h3>Всі предмети</h3>
            <table class="table mt-3">
                <tr>
                    <th>N</th>
                    <th>Назва</th>
                    <th>Active</th>
                </tr>
                @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subject->title }}</td>
                        <td>
                            <a href="{{ route('admin.subject.show', $subject->id) }}" class="btn btn-outline-primary"><i
                                    class="far fa-eye"></i></a>
                            <a href="{{ route('admin.subject.edit', $subject->id) }}" class="btn btn-outline-primary"><i
                                    class="far fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
