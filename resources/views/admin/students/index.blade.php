@extends('admin.layout.admin')

@section('title', 'Студенти - всі записи')

@section('content')
    @php(session(['page' => $students->currentPage()]))

    <div class="">
        {{ $students->links('admin.layout.pagination') }}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">Фото</th>
                <th class="text-center">ПІБ</th>
                <th class="text-center">Б/К</th>
                <th class="text-center">Група</th>
                <th class="text-center">Еmail/телефон</th>
                <th class="text-center">Примітки</th>
                <th class="text-center">Активні дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td class="text-center">
                        @if($student->photo)
                            <img src="{{$student->photo}}" alt="фото" height="75">
                        @endif
                    </td>
                    <td class="">
                        <b>
                            <a href="{{route('admin.students.show', $student->id)}}">
                                {{$student->surname}} {{$student->name}} {{$student->patronymic}}
                            </a>
                        </b>
                    </td>
                    <td class="text-center">{{$student->finance}}</td>
                    <td>
                        <b><a href="{{route('admin.groups.show', $student->group->id??0)}}">{{$student->group->title??''}}</a></b>
{{--                        <br>{{$student->position}}--}}
{{--                        <br>{{$student->meet}}--}}
                    </td>
                    <td><b> {{$student->phone}}</b><br>{{$student->email}}</td>
                    <td><b>{{$student->info}}</b></td>
                    <td class="text-center"><x-admin.action-icons resource="students" id="{{$student->id}}"></x-admin.action-icons></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $students->links('admin.layout.pagination') }}
        </div>
    </div>
@endsection
