@extends('admin.layout.admin')

@section('title', 'Групи - всі записи')

@section('content')
    <div class="">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">№</th>
                <th class="text-center">Назва</th>
                <th class="text-center">Кільк. студ.</th>
                <th class="text-center">Вступ/Закінчення</th>
                <th class="text-center">Освітня програма</th>
                <th class="text-center">Примітки</th>
                <th class="text-center">Активні дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($groups as $group)
{{--                {{dd($group->students->count())}}--}}
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td><a href="{{route('admin.groups.show', $group->id)}}">{{$group->name}} ({{$group->title}})</a></td>
                    <td>{{$group->students->count()}} студентів</td>
{{--                    <td><b>{{$group->title}}</b></td>--}}
                    <td class="text-center"><img src="{{$group->entry}}-{{$group->term}}" alt="" height="50"></td>
                    <td>
                        <a href="{{route('admin.programs.show', $group->program->id)}}">{{$group->program->title}} ({{$group->program->year}})</a>
                        <br>{{$group->program->level->title}}
                    </td>
                    <td><b>{{$group->info}}</b></td>
                    <td class="text-center"><x-admin.action-icons resource="groups" id="{{$group->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{--        {{ $levels->links('admin.pagination') }}--}}
        </div>
    </div>
@endsection
