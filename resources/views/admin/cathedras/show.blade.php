@extends('admin.layout.admin')

@section('title', 'Кафедри - перегляд')

@section('content')

    <div class="">
        <table class="table table-bordered">
            <tr>
                <td>Назва</td>
                <th>{{$cathedra->title}}</th>
            </tr>
            <tr>
                <td>Логотип</td>
                <th>
                    <img src="{{$cathedra->logo}}" alt="" height="50">
                </th>
            </tr>
            <tr>
                <td>Примітки</td>
                <th>{{$cathedra->info??'.....'}}</th>
            </tr>
            <x-admin.action-icons resource="cathedras" id="{{$cathedra->id}}"></x-admin.action-icons>
        </table>
    </div>
@endsection

