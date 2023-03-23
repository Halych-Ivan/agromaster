@extends('admin.layout.admin')

@section('title', 'Студенти - редагування')

@section('content')
    <x-admin.action-icons resource="students" id="{{$student->id}}"></x-admin.action-icons>
    <div class="">
        <form action="{{route('admin.students.update', $student->id)}}" method="POST" enctype="multipart/form-data" class="mt-3">
            @csrf
            @method('PATCH')
            <x-form.text name="surname" value="{{$student->surname}}" placeholder="Прізвище"></x-form.text>
            <x-form.text name="name" value="{{$student->name}}" placeholder="Ім'я"></x-form.text>
            <x-form.text name="patronymic" value="{{$student->patronymic}}" placeholder="По батькові"></x-form.text>
            <x-form.text name="phone" value="{{$student->phone}}" placeholder="Телефон"></x-form.text>
            <x-form.text name="email" value="{{$student->email}}" placeholder="Email"></x-form.text>
            <x-form.file src="{{$student->photo}}" name="photo" title="Виберіть фото" type="img"></x-form.file>
            <br>
            <div class="mb-3">
                <div class="input-group m-3">
                    <label class="input-group-text w-25" for="select01">Група</label>
                    <select class="form-select w-75" id="select01" name="group_id">
                    @foreach($groups as $group)
                            <option value="{{$group->id}}" @isset($student->group->id){{($student->group->id == $group->id) ? 'selected' : '' }}@endisset>
                                {{$group->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <x-form.text name="gradebook" value="{{$student->gradebook}}" placeholder="Залікова книжка"></x-form.text>
            <div class="mb-3">
                <div class="input-group m-3">
                    <label class="input-group-text w-25" for="select03">Фінансування</label>
                    <select class="form-select w-75" id="select03" name="finance">
                        <option value="б" {{$student->finance == 'б' ? 'selected' : ''}}>бюджет</option>
                        <option value="к" {{$student->finance == 'к' ? 'selected' : ''}}>контракт</option>
                    </select>
                </div>
            </div>
            <br>

            <x-form.text name="order" value="{{$student->order}}" placeholder="Зарахування"></x-form.text>
            <x-form.text name="order_in" value="{{$student->order_in}}" placeholder="Номер наказу зарахування"></x-form.text>
            <x-form.text name="order_in_data" value="{{$student->order_in_data}}" placeholder="Дата наказу"></x-form.text>
            <x-form.text name="order_out" value="{{$student->order_out}}" placeholder="Номер наказу відахування"></x-form.text>
            <x-form.text name="order_out_data" value="{{$student->order_out_data}}" placeholder="Дата наказу"></x-form.text>
            <x-form.text name="study_start" value="{{$student->study_start}}" placeholder="Початок навчання"></x-form.text>
            <x-form.text name="study_end" value="{{$student->study_end}}" placeholder="Закінчення навчання"></x-form.text>
            <x-form.text name="case" value="{{$student->case}}" placeholder="Договір про навчання"></x-form.text>
            <x-form.text name="contract" value="{{$student->contract}}" placeholder="Номер контракту"></x-form.text>
            <x-form.text name="contract_date" value="{{$student->contract_date}}" placeholder="Дата контракту"></x-form.text>
            <br>

            <div class="mb-3">
                <div class="input-group m-3">
                    <label class="input-group-text w-25" for="select02">Стать</label>
                    <select class="form-select w-75" id="select02" name="sex">
                            <option value="чол." {{$student->sex == 'чол.' ? 'selected' : ''}}>чол.</option>
                            <option value="жін." {{$student->sex == 'жін.' ? 'selected' : ''}}>жін.</option>
                    </select>
                </div>
            </div>
            <x-form.text name="birth" value="{{$student->birth}}" placeholder="Дата народження"></x-form.text>
            <br>

            <x-form.text name="passport" value="{{$student->passport}}" placeholder="Паспорт"></x-form.text>
            <x-form.text name="passport_series" value="{{$student->passport_series}}" placeholder="Серія поспорту"></x-form.text>
            <x-form.text name="passport_number" value="{{$student->passport_number}}" placeholder="Номер поспорту"></x-form.text>
            <x-form.text name="passport_record" value="{{$student->passport_record}}" placeholder="Номер запису"></x-form.text>
            <x-form.text name="passport_date_issue" value="{{$student->passport_date_issue}}" placeholder="Дата видачі"></x-form.text>
            <x-form.text name="passport_date_expiry" value="{{$student->passport_date_expiry}}" placeholder="Дійсний до"></x-form.text>
            <x-form.file src="{{$student->passport_photo}}" name="passport_photo" title="Виберіть фото паспорту" type="img"></x-form.file>

            <x-form.text name="student_id_number" value="{{$student->student_id_number}}" placeholder="Ідентифікаційний номер"></x-form.text>
            <x-form.file src="{{$student->student_id_photo}}" name="student_id_photo" title="Виберіть фото ід. номеру" type="img"></x-form.file>
            <br>

            <x-form.text name="address" value="{{$student->address}}" placeholder="Адреса"></x-form.text>
            <x-form.text name="address_region" value="{{$student->address_region}}" placeholder="Область"></x-form.text>
            <x-form.text name="address_district" value="{{$student->address_district}}" placeholder="Район"></x-form.text>
            <x-form.text name="address_city" value="{{$student->address_city}}" placeholder="Нас. пункт."></x-form.text>
            <x-form.text name="address_street" value="{{$student->address_street}}" placeholder="Вулиця"></x-form.text>
            <br>
            <x-form.text name="school" value="{{$student->school}}" placeholder="Заклад освіти"></x-form.text>
            <x-form.text name="school_document" value="{{$student->school_document}}" placeholder="Документ про освіту"></x-form.text>
            <x-form.text name="school_document_number" value="{{$student->school_document_number}}" placeholder="Документ про освіту (серія)"></x-form.text>
            <x-form.text name="school_document_date" value="{{$student->school_document_date}}" placeholder="Документ про освіту (дата)"></x-form.text>
            <x-form.text name="school_document_mark" value="{{$student->school_document_mark}}" placeholder="Документ про освіту (сер. бал)"></x-form.text>
            <x-form.file src="{{$student->school_document_photo}}" name="school_document_photo" title="Виберіть фото док. про освіту" type="img"></x-form.file>

            <x-form.textarea rows="3" name="info" value="{{$student->info}}"></x-form.textarea>
            <x-form.text name="mentor" value="{{$student->mentor}}" placeholder="Ментор"></x-form.text>
            <x-form.botton></x-form.botton>
        </form>
    </div>
@endsection

