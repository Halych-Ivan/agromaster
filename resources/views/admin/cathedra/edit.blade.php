@extends('admin.layouts.admin')

@section('title', 'Cathedra Edit')

@section('content')

    <div class="container m-2">
        <h1>Кафедри</h1>
        <a class="btn btn-outline-primary" href="{{route('admin.cathedra.index')}}">Всі кафедри</a>
        <a class="btn btn-outline-primary" href="{{route('admin.cathedra.create')}}">Додати</a>
        <a class="btn btn-outline-primary active" href="{{route('admin.cathedra.edit', $cathedra->id)}}">Редагувати</a>
        <hr>

        <div class="mt-3">
            <h3>Редагування кафедри</h3>
            <form action="{{ route('admin.cathedra.update', $cathedra->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')

                <x-admin.form.form-group>
                    <x-admin.form.input name="title" value="{{ $cathedra->title }}" autofocus label="{{__('Назва')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input name="abbr" value="{{ $cathedra->abbr }}" label="{{__('Абривіатура')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input name="link" value="{{ $cathedra->link }}" label="{{__('Посилання')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <label>{{ __('Контент сторінки') }}</label>
                    <div class="col-10">
                        <textarea id="summernote" name="content">{{ $cathedra->content }}</textarea>
                    </div>
                    @error('content')<div>{{$message}}</div>@enderror
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <div class="col-sm-2">
                        <img src="{{ asset('storage/'. $cathedra->image) }}" height="100px" alt="{{ $cathedra->image }}">
                    </div>
                    <x-admin.form.input type="file" name="image" img value="{{ $cathedra->image }}" label="{{__('Оберіть картинку')}}"/>

                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <div class="col-sm-2">
                        <img src="{{ asset('storage/'. $cathedra->logo) }}" height="100px" alt="{{ $cathedra->logo }}">
                    </div>
                    <x-admin.form.input type="file" name="logo" img value="{{ $cathedra->logo }}" label="{{__('Логотип')}}"/>
                </x-admin.form.form-group>

                <input type="hidden" name="id" value="{{ $cathedra->id }}">
                <x-admin.form.submit value="{{__('Зберегти')}}"/>

            </form>

        </div>
    </div>

@endsection
