<?php
$link = 'https://bot.agromaster.pp.ua/send.php?id=U6YKuNsstv1BEInWwL8HwA==&url='.route('home').'/tail/';
$link2 = 'https://bot.agromaster.pp.ua/send.php?id=NCQUKdH3i3bcOfKOl8phkg==&url='.route('home').'/tail/';

?>


@extends('layouts.index')

@section('title', 'Аркуш успішності')

@section('content')

    <div class="container mt-160">

            <h2 class="title">{{ $teacher->name }}</h2>
            <span class="line"></span>

            @foreach($arr as $value)
                <p>
                    <a href="{{route('home')}}/tail/{{$value['tail']}}" target="_blank">
                    {{$value['student']->surname}} {{$value['student']->name}} - {{$value['subject']->title}}, {{$value['date']}}
                    <span class="btn btn-outline-info btn-sm">
                        Заповнити
                    </span>
                    </a>
                    <span class="btn btn-outline-primary btn-sm">
                        <a class="" href="{{ $link }}{{$value['tail']}}&txt=Екзаменаційний лист - {{$value['student']->surname}} {{$value['student']->name}} з {{$value['subject']->title}}, дата видачі {{date('d.m.Y')}}. У разі успішного складання заліку чи іспиту необхідно заповнити поле оцінки в балах, прізвище та ініціали викладача." target="_blank">
                            Bot Г.І.В.
                        </a>
                    </span>
                    <span class="btn btn-outline-success btn-sm">
                        <a class="" href="{{ $link2 }}{{$value['tail']}}&txt=Екзаменаційний лист - {{$value['student']->surname}} {{$value['student']->name}} з {{$value['subject']->title}}, дата видачі {{date('d.m.Y')}}. У разі успішного складання заліку чи іспиту необхідно заповнити поле оцінки в балах, прізвище та ініціали викладача." target="_blank">
                            Bot М.О.М.
                        </a>
                    </span>


                    <span class="btn btn-outline-danger btn-sm">Відмовити</span>
                </p>
            @endforeach

    </div>

@endsection
