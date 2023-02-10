@extends('admin.layouts.admin')

@section('title', 'Subject Edit')

@section('content')

    <div class="container m-2">
        <h1>Предмети</h1>
        <a class="btn btn-outline-primary" href="{{route('admin.subject.index')}}">Всі предмети</a>
        <a class="btn btn-outline-primary" href="{{route('admin.subject.create')}}">Додати</a>
        <a class="btn btn-outline-primary active" href="{{route('admin.subject.edit', $subject->id)}}">Редагувати</a>
        <hr>

        <div class="mt-3">
            <h3>Редагування предмета</h3>
            <form action="{{ route('admin.subject.update', $subject->id) }}" method="POST">
                @csrf @method('PATCH')

                <x-admin.form.form-group>
                    <x-admin.form.input name="title" value="{{ $subject->title }}" autofocus label="{{__('Назва')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input name="size" value="{{ $subject->size }}" autofocus label="{{__('Кількість кредитів')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.submit value="{{__('Зберегти')}}"/>

            </form>

        </div>
    </div>

@endsection
