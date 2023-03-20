@extends('admin.layout.admin')

@section('title', 'Групи - редагування')

@section('content')
{{--    {{dd($group->program->id)}}--}}
    <x-admin.action-icons resource="groups" id="{{$group->id}}"></x-admin.action-icons>
    <div class="">
        <form action="{{route('admin.groups.update', $group->id)}}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            @method('PATCH')
            <x-form.text name="name" value="{{$group->name}}" placeholder="Назва"></x-form.text>
            <x-form.text name="title" value="{{$group->title}}" placeholder="Шифр"></x-form.text>
            <x-form.text name="entry" value="{{$group->entry}}" placeholder="Вступ"></x-form.text>
            <x-form.text name="term" value="{{$group->term}}" placeholder="Закічення"></x-form.text>

            <div class="mb-3">
                <div class="input-group m-3">
                    <label class="input-group-text w-25" for="select01">Освітня програма</label>
                    <select class="form-select w-75" id="select01" name="program_id">
                        @foreach($programs as $program)
                            <option value="{{$program->id}}" {{($group->program->id == $program->id) ? 'selected' : '' }}>{{$program->title}} ({{$program->year}})</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <x-form.textarea rows="3" name="info" value="{{$group->info}}"></x-form.textarea>
            <x-form.botton></x-form.botton>
        </form>
    </div>
@endsection
