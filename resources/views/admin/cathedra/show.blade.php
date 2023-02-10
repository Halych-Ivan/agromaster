@extends('admin.layouts.admin')

@section('title', 'Cathedra Show')

@section('content')

    <div class="container m-2">
        <h1>Кафедри</h1>
        <a class="btn btn-outline-primary" href="{{route('admin.cathedra.index')}}">Всі кафедри</a>
        <a class="btn btn-outline-primary" href="{{route('admin.cathedra.create')}}">Додати</a>
        <a class="btn btn-outline-primary" href="{{route('admin.cathedra.edit', $cathedra->id)}}">Редагувати</a>
        <hr>

        <div class="mt-3">
            <h3>Перегляд кафедри</h3>
            <h2 class="mr-5"><u>{{ $cathedra->title }}</u></h2>
        </div>

        <table class="table">

            <x-admin.show-row title="ID" value="{{$cathedra->id}}"></x-admin.show-row>

            <x-admin.show-row title="Назва" value="{{$cathedra->title}}"></x-admin.show-row>

            <x-admin.show-row title="Абревіатура" value="{{$cathedra->abbr}}"></x-admin.show-row>

            <x-admin.show-row title="Посилання" value="{{$cathedra->link}}"></x-admin.show-row>

            <x-admin.show-row title="Логотип">
                <img src="{{ asset('storage/'. $cathedra->logo) }}" height="100px" alt="{{ $cathedra->image }}">
            </x-admin.show-row>

            <x-admin.show-row title="Картинка">
                <img src="{{ asset('storage/'. $cathedra->image) }}" height="100px" alt="{{ $cathedra->image }}">
            </x-admin.show-row>

            <x-admin.show-row title="Опис" value="{{$cathedra->content}}"></x-admin.show-row>

        </table>

        <form action="{{ route('admin.subject.delete', $cathedra->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Видалити</button>
        </form>
@endsection
