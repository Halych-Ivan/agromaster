@extends('layouts.index')

@section('title', 'Індивідуальний план')

@section('page-banner')
    <x-page-banner title="Індивідуальний план" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
{{--    {{ dd($student) }}--}}
    <div class="text-center">
        <h1>Міністерство освіти і науки України</h1>
        <h2>Державний біотехнологічний університет</h2>
        <h2>Факультет мехатроніки та інжинірингу</h2>

        <div class="row text-left mt-10 mb-10">
            <div class="col-4"></div><div class="col-4"></div><div class="col-4">
                <h4>Затверджую</h4>
                <h5>Декан факультету </h5>
                <h5>________ Вадим БРЕДИХІН</h5>
                <h5>___ ________ 202__ року</h5>
            </div>
        </div>

        <h3 class="mt-10">Індивідуальний навчальний план <u>№{{$student['id']}}</u></h3>
        <h3>здобувача вищої освіти <u>{{$student['ПІБ']}}</u></h3>

{{--        {{dd($sub)}}--}}
        @foreach($semesters as $key => $value)
            @if ($loop->odd)
                <h4 class="mt-3">на {{$student['курс']++}} курс навчання {{$student['рік'].'-'.++$student['рік']}} н.р.</h4>
            @endif

            <h4 class="mt-3">{{$key}} семестр</h4>
            <table class="table table-bordered table-hover align-middle">
                <tr>
                    <th class="align-middle">№ з.п.</th>
                    <th class="align-middle">Назва дисципліни</th>
                    <th class="align-middle"><a href="https://uk.wikipedia.org/wiki/%D0%9A%D1%80%D0%B5%D0%B4%D0%B8%D1%82_(%D0%BE%D1%81%D0%B2%D1%96%D1%82%D0%B0)" target="_blank">Кредити ECTS (?)</a></th>
                    <th class="align-middle">Вид підсумкового контролю</th>
{{--                    <th class="align-middle">Відмітка про виконання плану</th>--}}
                    <th class="align-middle">Кафедра / Викладач</th>
                </tr>
            @foreach($value as $item)
                    @continue($item[4] == false)
                <tr>
                    <td class="col-1">{{ $item[0] }}</td>
                    <td class="text-left col-4">{{ $item[1] }}</td>
                    <td class="col-1">{{ $item[3] }}</td>
                    <td class="col-1">{{ $item[4] }}</td>
{{--                    <td></td>--}}
                    <td class="text-left col-3">{{ $item[5] }}<br><b>{{ $item[6] }}</b></td>
                </tr>
            @endforeach
        </table>
        @endforeach
        <div class="text-left mt-10 ml-15">
            <p>Індивідуальний навчальний план складено <u>   вересень 2022 року</u> </p>
            <?php
                      $name =  explode(" ", $student['ПІБ']);
            ?>


            <p>Здобувач _______  {{ $name[1] }} <span style="text-transform: uppercase;">{{$name[0]}}</span> </p>
            <p>Фахівець деканату ______ ______</p>
        </div>

    </div>
@endsection
