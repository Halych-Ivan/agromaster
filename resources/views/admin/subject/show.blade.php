@extends('admin.layouts.admin')

@section('title', 'Subject Show')

@section('content')

    <div class="container m-2">
        <h1>Предмети</h1>
        <a class="btn btn-outline-primary" href="{{route('admin.subject.index')}}">Всі предмети</a>
        <a class="btn btn-outline-primary" href="{{route('admin.subject.create')}}">Додати</a>
        <a class="btn btn-outline-primary" href="{{route('admin.subject.edit', $subject->id)}}">Редагувати</a>
        <hr>

        <div class="mt-3">
            <h3>Перегляд предмету</h3>
            <h2 class="mr-5"><u>{{ $subject->title }}</u></h2>
        </div>

        <table class="table">
            <tr>
                <td>ID</td>
                <td>{{ $subject->id }}</td>
            </tr>
            <tr>
                <td>Назва</td>
                <td>{{ $subject->title }}</td>
            </tr>
            <tr>
                <td>Кількість кредитів</td>
                <td>{{ $subject->size }}</td>
            </tr>
            <tr>
                <td>Текст</td>
                <td>{{ $subject->content }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td>{{ $subject->image }} <img src="{{ asset('storage/'. $subject->image) }}" height="100px"></td>
            </tr>
            <tr>
                <td>Силабус</td>
                <td>{{ $subject->syllabus }}</td>
            </tr>
            <tr>
                <td>Программа</td>
                <td>{{ $subject->program }}</td>
            </tr>
        </table>

        <form action="{{ route('admin.subject.delete', $subject->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Видалити</button>
        </form>
@endsection
