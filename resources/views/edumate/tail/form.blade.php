@extends('layouts.index')

@section('title', 'Аркуш успішності')

@section('page-banner')
    <x-page-banner title="Аркуш успішності" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <div class="container ">
        <div class="">
            <div class="justify-content-center">
                <form method="POST" action="{{ route('tail.pos') }}">
                    @csrf
                    <input type="hidden" name="address_ip" value="{{$_SERVER['REMOTE_ADDR']}}">
                    <input type="hidden" name="tail" value="{{$tails}}">

                    <h3 class="text-center m-3">ДЕРЖАВНИЙ БІОТЕХНОЛОГІЧНИЙ УНІВЕРСИТЕТ</h3>
                    <h4 class="text-center">ФАКУЛЬТЕТ МЕХАТРОНІКИ ТА ІНЖИНІРИНГУ</h4>
                    <p class="text-center m-2"><i>Денне навчання</i></p>
                    <h5 class="text-center"><b>АРКУШ УСПІШНОСТІ СТУДЕНТА</b></h5>
                    <p class="text-center small">(підшивається до основної відомості групи)</p>
                    <p class="text-center m-2">форма контролю <u>{{ $subject->control  }}</u></p>
                    <p class="">Спеціальність: <u>{{ $student->group->program->specialty->code.' '.$student->group->program->specialty->title }}</u></p>
                    <p class="">Дисципліна: <u>{{ $subject->title }}</u></p>
                    <p class="">Викладач: <b><span id="teacher_inc"></span></b></p>
                    <p class="">ПІБ студента: <u><b>{{ $student->surname.' '.$student->name.' '.$student->patronymic }}</b></u></p>
                    <p class="">№ залікової книжки: <u>{{ $student->gradebook }}</u></p>
                    @php
                        $kurs = substr($student->group->name, 0, 1);
                          if($kurs == 5) $kurs = '1 (магістерський)';
                          if($kurs == 6) $kurs = '2 (магістерський)';
                    @endphp
                    <p class="">Курс: <u>{{ $kurs }}</u> Група: <u>{{$student->group->name}} ({{$student->group->title}})</u></p>
                    <p class="">Дата видачі {{ $date_in }}                                 </p>
                    <p class="">Декан факультету: _______ Вадим БРЕДИХІН</p>

                    <div class="">
                        <label for="rang">Бали:</label>
                        <input id="rang" type="number" name="rang" min="60" max="100" required autofocus> .
                        <p class="inline"> <span id="ECTS"></span></p>
                        <p class="inline">Оцінка за національною шкалою <span id="mark"></span>.</p>
                        <p class="">Дата складання: {{ date('d.m.Y')  }}</p>
                    </div>
                    <div class="single-form">
                        <label for="teacher">Прізвище та ініціали викладача:</label>
                        <input id="teacher" type="text" name="teacher" placeholder="Прізвище та ініціали викладача" required>
                    </div>
                    {{--                <div class="single-form">--}}
                    {{--                    <label for="email">Копію відправити на email</label>--}}
                    {{--                    <input id="email" type="email" name="email" placeholder="не обов'язково">--}}
                    {{--                </div>--}}
                    <div class="single-form">
                        <button  type="submit" class="main-btn" id="submitButton">Підтвердити</button>
                    </div>
                </form>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script>
            $('#rang').keyup(function(){
                var Value = $('#rang').val();

                if(Value > 89){
                    $('#ECTS').text('ECTS A.');
                    $('#mark').text('відмінно');
                } else if(Value > 81){
                    $('#ECTS').text('ECTS B.');
                    $('#mark').text('добре');
                } else if(Value > 73){
                    $('#ECTS').text('ECTS C.');
                    $('#mark').text('добре');
                } else if(Value > 63){
                    $('#ECTS').text('ECTS D.');
                    $('#mark').text('задовільно');
                } else if(Value > 59){
                    $('#ECTS').text('ECTS E');
                    $('#mark').text('задовільно');
                } else {
                    $('#ECTS').empty();
                }
            });

            $('#teacher').keyup(function(){
                var Teacher_name = $('#teacher').val();
                $('#teacher_inc').text(Teacher_name);
            });
        </script>
    </div>
@endsection
