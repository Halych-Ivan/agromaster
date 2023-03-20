@extends('admin.layout.admin')

@section('title', 'Групи - перегляд')

@section('content')

    <div class="">
        <table class="table table-bordered">
            <tr>
                <td>Назва</td>
                <th>{{$group->name}}</th>
            </tr>
            <tr>
                <td>Номер</td>
                <th>{{$group->title}}</th>
            </tr>
            <tr>
                <td>Кільк. студентів</td>
                <th>{{$group->students->count()}}</th>
            </tr>
            <tr>
                <td>Вступ</td>
                <th>{{$group->entry}}</th>
            </tr>
            <tr>
                <td>Закінчення</td>
                <th>{{$group->term}}</th>
            </tr>
            <tr>
                <td>Освітня програма</td>
                <th>
                    <a href="{{route('admin.programs.show', $group->program->id)}}">{{$group->program->title}} ({{$group->program->year}})</a>
                </th>
            </tr>
            <tr>
                <td>Спеціальність</td>
                <th>
                    <a href="{{route('admin.specialties.show', $group->program->specialty->id)}}">{{$group->program->specialty->title}}</a>
                </th>
            </tr>
            <tr>
                <td>Рівень ВО</td>
                <th>
                    <a href="{{route('admin.levels.show', $group->program->level->id)}}">{{$group->program->level->title}}</a>
                </th>
            </tr>
           <tr>
                <td>Примітки</td>
                <th>{{$group->info??'.....'}}</th>
            </tr>
            <x-admin.action-icons resource="groups" id="{{$group->id}}"></x-admin.action-icons>
        </table>
    </div>
@endsection

