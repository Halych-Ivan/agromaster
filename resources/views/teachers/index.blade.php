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

                    <span class="btn btn-outline-danger btn-sm">Відмовити</span>
                </p>
            @endforeach

    </div>

@endsection
