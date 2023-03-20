@extends('cabinet.layout')
@section('title', 'ADMIN')

@section('page-banner')
@endsection


@section('content')
    <div class="container m-2">
        <a class="btn btn-outline-success active" href="{{route('admin.subjects.create')}}" type="submit">Додати</a>
        <a class="btn btn-outline-success " href="{{route('admin.subjects.index')}}" type="submit">Всі</a>
    </div>


<div class="col-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Редагування картки дисципліни</h4>
            <div class="m-t-20">
                <form action="{{route('admin.subjects.update', $subject->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <x-form.text name="title" value="{{$subject->title}}" placeholder="Назва"></x-form.text>
                    <x-form.text name="abbr" value="{{$subject->abbr}}" placeholder="Абревіатура"></x-form.text>
                    <x-form.text name="code" value="{{$subject->code}}" placeholder="Код дисципліни"></x-form.text>
                    <x-form.text name="control" value="{{$subject->control}}" placeholder="Форма контролю"></x-form.text>
                    <x-form.text name="semester" value="{{$subject->semester}}" placeholder="Семестр"></x-form.text>


                    <x-form.text name="syllabus" value="{{$subject->syllabus}}" placeholder="Силабус"></x-form.text>
                    <x-form.text name="program" value="{{$subject->program}}" placeholder="Програма"></x-form.text>
                    <x-form.text name="link" value="{{$subject->link}}" placeholder="Посилання"></x-form.text>
                    <x-form.text name="content" value="{{$subject->content}}" placeholder="Контент"></x-form.text>
                    <x-form.text name="teacher" value="{{$subject->teacher}}" placeholder="Викладач"></x-form.text>
                    <x-form.text name="year" value="{{$subject->year}}" placeholder="Рік"></x-form.text>


                    <x-form.image src="{{$subject->image}}" name="image" title="Виберіть картинку"></x-form.image>

                    <x-form.textarea rows="3" name="info" placeholder="{{$subject->info??'Анотація'}}"></x-form.textarea>

                    <div class="form-group">
                        <button class="btn btn-success waves-effect waves-light" type="submit">Зберегти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
