@php($semesters = [
                    'I' => 'I семестр, 1 курс',
                    'II' => 'II семестр, 1 курс',
                    'III' => 'III семестр, 2 курс',
                    'IV' => 'IV семестр, 2 курс',
                    'V' => 'V семестр, 3 курс',
                    'VI' => 'VI семестр, 3 курс',
                    'VII' => 'VII семестр, 4 курс',
                    'VV' => 'VIII семестр, 4 курс',
                ])
@php($semesters_N = [
                    'In' => 'I семестр, 1 курс (магістр ОНП)',
                    'IIn' => 'II семестр, 1 курс (магістр ОНП)',
                    'IIIn' => 'III семестр, 2 курс (магістр ОНП)',
                    'IVn' => 'IV семестр, 2 курс (магістр ОНП)',
                ])
@php($semesters_M = [
                    'Im' => 'I семестр, 1 курс (магістр ОПП)',
                    'IIm' => 'II семестр, 1 курс (магістр ОПП)',
                    'IIInm' => 'III семестр, 2 курс (магістр ОПП)',
                ])





@extends('layouts.index')

@section('title', 'Admin - Аркуш успішності')

@section('content')
<div class="container">
    <div class="mt-180 mb-15">
        <div class="main-btn-sm"><a href="{{route('tail.admin.index')}}">Новий пошук</a></div>
        <div class="main-btn-sm"><a href="{{route('tail.admin.show')}}">Всі Аркуші</a></div>
    </div>
    <div class="row justify-content-center ">
        <div class="login-register-content">
            <h1 class="title">Аркуш успішності</h1>
            <form method="POST" action="{{ route('tail.admin.post') }}" class="mt-5">
                @csrf
                <div class="single-form">
                    <label for="surname">Прізвище студента</label>
                    <input id="surname" type="text" name="surname" required>
                </div>
{{--                <div class="single-form">--}}
{{--                    <label for="gradebook">Або номер залікової книжки</label>--}}
{{--                    <input id="gradebook" type="text" name="gradebook">--}}
{{--                </div>--}}
                <div class="single-form">
                    <label for="viberbot">Ключ ViberBOT</label>
                    <input id="viberbot" type="text" name="viberbot" value="U6YKuNsstv1BEInWwL8HwA==">
                </div>
                <div class="single-form">
                    <div>Семестр:</div>
                    @foreach($semesters as $key => $value)
                        <div class="form-radio">
                            <input type="radio" id="{{$key}}" name="semester" value="{{$key}}" required>
                            <label for="{{$key}}"><span></span> {{$value}}</label>
                        </div>
                    @endforeach
                    <hr class="m-2">
                    @foreach($semesters_M as $key => $value)
                        <div class="form-radio">
                            <input type="radio" id="{{$key}}" name="semester" value="{{$key}}" required>
                            <label for="{{$key}}"><span></span> {{$value}}</label>
                        </div>
                    @endforeach
                    <hr class="m-2">
                    @foreach($semesters_N as $key => $value)
                        <div class="form-radio">
                            <input type="radio" id="{{$key}}" name="semester" value="{{$key}}" required>
                            <label for="{{$key}}"><span></span> {{$value}}</label>
                        </div>
                    @endforeach
                </div>
                <div class="single-form">
                    <button class="main-btn btn-block">Пошук</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
