@extends('admin.layout.admin')

@section('title', 'Групи - новий запис')

@section('content')
    {{--    {{dd($group->program->id)}}--}}
    <x-admin.action-icons resource="groups" id=""></x-admin.action-icons>
    <div class="">
        <form action="{{route('admin.groups.store')}}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
{{--            @method('PATCH')--}}
            <x-form.text name="name" value="{{old('name')}}" placeholder="Назва" required="required"></x-form.text>
            <x-form.text name="title" value="{{old('title')}}" placeholder="Шифр" required="required"></x-form.text>
            <x-form.text name="entry" value="{{old('entry')}}" placeholder="Вступ"></x-form.text>
            <x-form.text name="term" value="{{old('term')}}" placeholder="Закічення"></x-form.text>

            <div class="mb-3">
                <div class="input-group m-3">
                    <label class="input-group-text w-25" for="select01">Освітня програма</label>
                    <select class="form-select w-75" id="select01" name="program_id">
                        @foreach($programs as $program)
                            <option value="{{$program->id}}" {{(old('program_id') == $program->id) ? 'selected' : '' }}>{{$program->title}} ({{$program->year}})</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <x-form.textarea rows="3" name="info" value="{{old('info')}}"></x-form.textarea>
            <x-form.botton></x-form.botton>
        </form>
    </div>
@endsection
