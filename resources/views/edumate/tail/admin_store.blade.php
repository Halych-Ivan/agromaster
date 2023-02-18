@extends('layouts.index')

@section('title', 'Admin - Аркуш успішності')

@section('content')
<div class="container">
    <div class="mt-180 mb-15">
        <div class="main-btn-sm"><a href="{{route('tail.admin.index')}}">Новий пошук</a></div>
        <div class="main-btn-sm"><a href="{{route('tail.admin.show')}}">Всі Аркуші</a></div>
    </div>
    <div class=" justify-center">

        @if(isset($students))
            @foreach($students as $student)
                <div class="mt-3 teacher-details-content">
                    <div class="">
                        <h4 class="teacher-name">Студент:</h4>
                        <p>
                            <span class="designation">{{ $student->surname . ' ' .$student->name }}</span>
                            <span class="department">Група <u>{{ $student->group->name }} ({{ $student->group->title }})</u>,
                                Спеціальність {{ $student->group->program->specialty->code }} {{ $student->group->program->specialty->title }}</span>
                        </p>
                        <h4><strong>Дисципліни:</strong></h4>
                    </div>
                </div>
                <div class="faq-wrapper ">
                    <div class="accordion" id="accordionExample">
                        @foreach($subjects as $subject)
                            <div class="card mt-1">
                                <span class="question">-</span>
                                <div class="card-header" id="heading{{$subject->id}}">
                                    <a href="#" data-toggle="collapse" data-target="#collapse{{$subject->id}}">
                                        <h5 class="">{{ $subject->title }}</h5>
                                        <p class=""><b>{{ $subject->teacher }}</b></p>
                                    </a>
                                </div>
                                <div id="collapse{{$subject->id}}" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body mt-1">
                                        <span class="answer"></span>
                                        <p>
                                            @if($link)
                                                <a class="main-btn-sm" href="{{ $link }}{{$student->id}}*{{$subject->id}}*{{md5($subject->title)}}*{{date('d.m.Y')}}&txt=Екзаменаційний лист - {{$student->surname}} {{$student->name}} з {{$subject->title}}, дата видачі {{date('d.m.Y')}}. У разі успішного сладання заліку чи іспиту необхідно заповнити поле оцінки в балах, прізвище та ініціали викладача." target="_blank">
                                                    ViberBot
                                                </a>
                                            @else
                                                <span style="color: red">Ключ вайбер не введено</span>
                                            @endif
                                                <a href="{{route('home')}}/tail/{{$student->id}}*{{$subject->id}}*{{md5($subject->title)}}*{{date('d.m.Y')}}" target="_blank">
                                                    {{route('home')}}/tail/{{$student->id}}*{{$subject->id}}*{{md5($subject->title)}}*{{date('d.m.Y')}}
                                                </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <div>
                <h2>Не знайдено</h2>
            </div>
        @endif

    </div>
</div>
@endsection
