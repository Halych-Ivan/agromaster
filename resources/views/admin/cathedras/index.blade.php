@extends('admin.layout.admin')

@section('title', 'Кафедри - всі записи')

@section('content')
    <div class="">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">№</th>
                <th class="text-center">Назва</th>
                <th class="text-center">Логотип</th>
                <th class="text-center">Примітки</th>
                <th class="text-center">Активні дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cathedras as $cathedra)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td><b>{{$cathedra->title}}</b></td>
                    <td class="text-center"><img src="{{$cathedra->logo}}" alt="" height="50"></td>
                    <td><b>{{$cathedra->info}}</b></td>
                    <td class="text-center"><x-admin.action-icons resource="cathedras" id="{{$cathedra->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{--        {{ $levels->links('admin.pagination') }}--}}
        </div>
    </div>
@endsection
