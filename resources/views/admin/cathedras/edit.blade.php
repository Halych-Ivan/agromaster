@extends('admin.layout.admin')

@section('title', 'Кафедри - редагування')

@section('content')
    <x-admin.action-icons resource="cathedras" id="{{$cathedra->id}}"></x-admin.action-icons>
    <div class="">
        <form action="{{route('admin.cathedras.update', $cathedra->id)}}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            @method('PATCH')
            <x-form.text name="title" value="{{$cathedra->title}}" placeholder="Назва"></x-form.text>
            <x-form.file src="{{$cathedra->logo}}" name="logo" title="Виберіть картинку" type="img"></x-form.file>
            <x-form.textarea rows="3" name="info" value="{{$cathedra->info}}"></x-form.textarea>
            <x-form.botton></x-form.botton>
        </form>
    </div>
@endsection
