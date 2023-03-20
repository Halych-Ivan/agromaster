@extends('admin.layout.admin')

@section('title', 'Викладачі - редагування')

@section('content')
    <x-admin.action-icons resource="teachers" id=""></x-admin.action-icons>
    <div class="">
        <form action="{{route('admin.teachers.store')}}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
{{--            @method('PATCH')--}}
            <x-form.text name="name" value="{{old('name')}}" placeholder="ПІБ"></x-form.text>
            <x-form.text name="phone" value="{{old('phone')}}" placeholder="Телефон"></x-form.text>
            <x-form.text name="email" value="{{old('email')}}" placeholder="Email"></x-form.text>
            <x-form.text name="meet" value="{{old('meet')}}" placeholder="Посилання Google Meet"></x-form.text>

            <x-form.text name="position" value="{{old('position')}}" placeholder="Посада"></x-form.text>
            <div class="mb-3">
                <div class="input-group m-3">
                    <label class="input-group-text w-25" for="select01">Кафедра</label>
                    <select class="form-select w-75" id="select01" name="cathedra_id">
                        @foreach($cathedras as $cathedra)
                            <option value="{{$cathedra->id}}" {{(old('cathedra_id') == $cathedra->id) ? 'selected' : '' }}>{{$cathedra->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <x-form.file src="{{old('photo')}}" name="photo" title="Виберіть фото" type="img"></x-form.file>
            <x-form.textarea rows="3" name="info" value="{{old('info')}}"></x-form.textarea>
            <x-form.botton></x-form.botton>
        </form>
    </div>
@endsection
