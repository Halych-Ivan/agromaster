@extends('admin.layouts.admin')

@section('title', 'Subject Create')

@section('content')

    <div class="container m-2">
        <h1>Предмети</h1>
        <a class="btn btn-outline-primary " href="{{route('admin.subject.index')}}">Всі предмети</a>
        <a class="btn btn-outline-primary active" href="{{route('admin.subject.create')}}">Додати</a>

        <hr>

        <div class="mt-3">
            <h3>Додавання предмету</h3>
            <form action="{{ route('admin.subject.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-admin.form.form-group>
                    <x-admin.form.input name="title" value="{{ old('title') }}" autofocus label="{{__('Назва')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input name="code" value="{{ old('code') }}" label="{{__('Шифр за планом')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input name="size" value="{{ old('size') }}" label="{{__('Кількість кредитів')}}"/>
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
                    <x-admin.form.input type="file" name="syllabus" value="{{ old('syllabus') }}" label="{{__('Оберіть силабус')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.input type="file" name="program" value="{{ old('program') }}" label="{{__('Оберіть програму')}}"/>
                </x-admin.form.form-group>

                <x-admin.form.form-group>
                    <x-admin.form.select name="cathedra_id" label="Оберіть кафедру">
                        @foreach($cathedras as $cathedra)
                            <option class="w-50" value="{{ $cathedra->id }}" {{ $cathedra->id == old('cathedra_id') ? ' selected' : '' }}>
                                {{ $cathedra->title }}
                            </option>
                        @endforeach
                    </x-admin.form.select>
                </x-admin.form.form-group>

                <x-admin.form.submit value="{{__('Зберегти')}}"/>

            </form>
        </div>
    </div>

@endsection
