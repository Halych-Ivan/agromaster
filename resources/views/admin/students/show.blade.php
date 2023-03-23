@extends('admin.layout.admin')

@section('title', 'Студенти - перегляд')

@section('content')

    <div class="">
        <table class="table table-bordered">
            <tr>
                <td>ПІБ</td>
                <th>{{$student->surname}} {{$student->name}} {{$student->patronymic}} </th>
                <td><img src="{{asset($student->photo)}}" alt="фото" height="100"></td>
            </tr>
            <tr>
                <td>Група</td>
                <th><a href="{{route('admin.students.show', $student->group->id??0)}}">{{$student->group->title??''}}</a></th>
                <td></td>
            </tr>
            <tr>
                <td>Спеціальність</td>
                <th>
                    {{$student->group->program->specialty->code??''}} {{$student->group->program->specialty->title??''}}<br>
                    {{$student->group->program->specialty->level??''}} {{$student->group->program->level->title??''}}
                </th>
                <td></td>
            </tr>
            <tr>
                <td>Email</td>
                <th>{{$student->email}}</th>
                <td></td>
            </tr>
            <tr>
                <td>Телефон</td>
                <th>{{$student->phone}}</th>
                <td></td>
            </tr>
            <tr>
                <td>Стать</td>
                <th>{{$student->sex}}</th>
                <td></td>
            </tr>
            <tr>
                <td>Дата народження</td>
                <th>{{$student->birth}}</th>
                <td></td>
            </tr>
            <tr>
                <td>
                    Паспорт<br>
                    - серія, номер<br>
                    - запис<br>
                    - виданий<br>
                    - діє до<br>
                </td>
                <th>
                    {{$student->passport}}<br>
                    {{$student->passport_series}} {{$student->passport_number}}<br>
                    {{$student->passport_record}}<br>
                    {{$student->passport_date_issue}}<br>
                    {{$student->passport_date_expiry}}<br>
                </th>
                <td>
                    <img src="{{asset($student->passport_photo)}}" alt="фото" height="50">
                </td>
            </tr>

            <tr>
                <td>Ідентифікаційний код</td>
                <th>{{$student->code_ident}}</th>
            </tr>

            <tr>
                <td>Студентський квиток</td>
                <th>
                    {{$student->student_id}}<br>
                    {{$student->student_id_series}} {{$student->student_id_number}}<br>
                </th>
                <td>
                    <img src="{{asset($student->student_id_photo)}}" alt="фото" height="50">
                </td>
            </tr>

            <tr>
                <td>
                    Адреса<br>
                    - область<br>
                    - район<br>
                    - нас. пункт<br>
                    - вулиця<br>
                </td>
                <th>
                    {{$student->address}}<br>
                    {{$student->address_region}}<br>
                    {{$student->address_district}}<br>
                    {{$student->address_city}}<br>
                    {{$student->address_street}}<br>
                </th>
                <td></td>
            </tr>

            <tr>
                <td>Заклад освіти</td>
                <th>
                    {{$student->school}}<br>
                    {{$student->school_document}}<br>
                    {{$student->school_document_series}} {{$student->school_document_number}}<br>
                    {{$student->school_document_date}}<br>
                    {{$student->school_document_mark}}<br>
                </th>
                <td>
                    <img src="{{asset($student->school_document_photo)}}" alt="фото" height="50">
                </td>
            </tr>

            <tr>
                <td>
                    Навчання<br>
                    - залікова книжка<br>
                    - початок<br>
                    - закінчення<br>
                    - фінансування<br>
                    - номер договору<br>
                    - номер контракту<br>
                    - сума контракту<br>
                    - дата контракту<br>
                </td>
                <th>
                    <br>
                    {{$student->gradebook}}<br>
                    {{$student->study_start}}<br>
                    {{$student->study_end}}<br>
                    {{$student->finance}}<br>
                    {{$student->case}}<br>
                    {{$student->contract}}<br>
                    {{$student->contract_sum}}<br>
                    {{$student->contract_date}}<br>
                </th>
                <td>
                </td>
            </tr>

            <tr>
                <td>Наказ<br>- зарахування<br>- відрахування</td>
                <th>
                    {{$student->order}}<br>
                    @if($student->order_in){{$student->order_in}} від {{$student->order_in_data}}@endif<br>
                    @if($student->order_out){{$student->order_out}} від {{$student->order_out_data}}@else навчається @endif
                </th>
                <td>
                </td>
            </tr>

            <tr>
                <td>Примітки</td>
                <th>{{$student->info??'.....'}}</th>
            </tr>

            <tr>
                <td>Ментор</td>
                <th>{{$student->mentor}}</th>
            </tr>
            <x-admin.action-icons resource="students" id="{{$student->id}}"></x-admin.action-icons>
        </table>
    </div>
@endsection

