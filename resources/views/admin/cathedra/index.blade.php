@extends('admin.layouts.admin')

@section('title', 'Cathedra All')

@section('content')

    <div class="container m-2">
        <h1>Кафедри</h1>
        <a class="btn btn-outline-primary active" href="{{route('admin.cathedra.index')}}">Всі кафедри</a>
        <a class="btn btn-outline-primary" href="{{route('admin.cathedra.create')}}">Додати</a>
        <hr>

        <div>
            <h3>Всі кафедри</h3>
            <table class="table mt-3">
                <tr>
                    <th>N</th>
                    <th>Назва</th>
                    <th>Active</th>
                </tr>
                @foreach($cathedras as $cathedra)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cathedra->title }}</td>
                        <td>{{ $cathedra->abbr }}</td>
                        <td><img src="{{ asset('storage/'. $cathedra->logo) }}" height="50px" alt="{{ $cathedra->logo }}"></td>
                        <td>
                            <a href="{{ route('admin.cathedra.show', $cathedra->id) }}" class="btn btn-outline-primary">
                                <i class="far fa-eye"></i></a>
                            <a href="{{ route('admin.cathedra.edit', $cathedra->id) }}" class="btn btn-outline-primary">
                                <i class="far fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
