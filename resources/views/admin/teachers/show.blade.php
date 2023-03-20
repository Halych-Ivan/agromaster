@extends('admin.layout.admin')

@section('title', 'Викладачі - перегляд')

@section('content')

    <div class="">
        <table class="table table-bordered">
            <tr>
                <td>ПІБ</td>
                <th>{{$teacher->name}}</th>
            </tr>
            <tr>
                <td>Кафедра</td>
                <th><a href="{{route('admin.cathedras.show', $teacher->cathedra->id??0)}}">{{$teacher->cathedra->title??''}}</a></th>
            </tr>
            <tr>
                <td>Посада</td>
                <th>{{$teacher->position}}</th>
            </tr>
            <tr>
                <td>Email</td>
                <th>{{$teacher->email}}</th>
            </tr>
            <tr>
                <td>Телефон</td>
                <th>{{$teacher->phone}}</th>
            </tr>
            <tr>
                <td>Фото</td>
                <th>
                    {{$teacher->photo}}
                    <img src="{{asset($teacher->photo)}}" alt="" height="100">
                </th>
            </tr>
            <tr>
                <td>Примітки</td>
                <th>{{$teacher->info??'.....'}}</th>
            </tr>
            <x-admin.action-icons resource="teachers" id="{{$teacher->id}}"></x-admin.action-icons>
        </table>
    </div>
@endsection

