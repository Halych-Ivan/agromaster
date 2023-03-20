@extends('admin.layout.admin')

@section('title', 'Кафедри - новий запис')

@section('content')
    <x-admin.action-icons resource="cathedras" id=""></x-admin.action-icons>
    <div class="">
        <form action="{{route('admin.cathedras.store')}}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            {{--            @method('PATCH')--}}
            <x-form.text name="title" value="{{old('title')}}" placeholder="Назва"></x-form.text>
            <x-form.text name="abbr" value="{{old('abbr')}}" placeholder="Абревіатура"></x-form.text>
            <x-form.file src="{{old('logo')}}" name="logo" title="Виберіть картинку" type="img"></x-form.file>
            <x-form.textarea rows="3" name="info" value="{{old('info')}}"></x-form.textarea>
            <x-form.botton></x-form.botton>
        </form>
    </div>
@endsection
