@extends('admin.layout.admin')

@section('title', 'Викладачі - всі записи')

@section('content')
    @php(session(['page' => $teachers->currentPage()]))

    <div class="">
        {{ $teachers->links('admin.layout.pagination') }}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">№</th>
                <th class="text-center">Фото</th>
                <th class="text-center">ПІБ</th>
                <th class="text-center">Кафедра/посада</th>
                <th class="text-center">Еmail/телефон</th>
                <th class="text-center">Примітки</th>
                <th class="text-center">Активні дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center">
                        @if($teacher->photo)
                            <img src="{{$teacher->photo}}" alt="" height="75">
                        @endif
                    </td>
                    <td class="text-center"><b><a href="{{route('admin.teachers.show', $teacher->id)}}">{{$teacher->name}}</a></b></td>
                    <td>
                        <b><a href="{{route('admin.cathedras.show', $teacher->cathedra->id??0)}}">{{$teacher->cathedra->title??''}}</a></b>
                        <br>{{$teacher->position}}
                        <br>{{$teacher->meet}}
                    </td>
                    <td><b>{{$teacher->email}} </b><br>{{$teacher->phone}}</td>
                    <td><b>{{$teacher->info}}</b></td>
                    <td class="text-center"><x-admin.action-icons resource="teachers" id="{{$teacher->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
                    {{ $teachers->links('admin.layout.pagination') }}
        </div>
    </div>
@endsection
