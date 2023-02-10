@extends('admin.layouts.admin')

@section('title', 'Cathedra Create')

@section('content')

    <div class="container m-2">
        <h1>Кафедри</h1>
        <a class="btn btn-outline-primary " href="{{route('admin.cathedra.index')}}">Всі кафедри</a>
        <a class="btn btn-outline-primary active" href="{{route('admin.cathedra.create')}}">Додати</a>

        <hr>

        <div class="mt-3">
            <h3>Додавання кафедри</h3>
            <form action="{{ route('admin.cathedra.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-admin.form.form-group>
                    <x-admin.form.input name="title" value="{{ old('title') }}" autofocus label="{{__('Назва')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input name="abbr" value="{{ old('abbr') }}" label="{{__('Абривіатура')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input name="link" value="{{ old('link') }}" label="{{__('Посилання')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <label>{{ __('Контент сторінки') }}</label>
                    <div class="col-10">
                        <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                    </div>
                    @error('content')<div>{{$message}}</div>@enderror
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input type="file" name="image" value="{{ old('image') }}" label="{{__('Оберіть картинку')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input type="file" name="logo" value="{{ old('logo') }}" label="{{__('Логотип')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.submit value="{{__('Зберегти')}}"/>

            </form>
        </div>
    </div>

@endsection
