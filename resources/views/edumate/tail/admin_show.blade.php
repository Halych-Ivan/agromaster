@extends('layouts.index')

@section('title', 'Admin - Аркуш успішності')

@section('content')
    <div class="container">
        <div class="mt-180 mb-15">
            <div class="main-btn-sm"><a href="{{route('tail.admin.index')}}">Новий пошук</a></div>
            <div class="main-btn-sm"><a href="{{route('tail.admin.show')}}">Всі Аркуші</a></div>
        </div>
        <div>
            <h2>Всі екзаменаційні аркуші</h2>
            @foreach($tails as $tail)

                <a @if($tail->name) class="btn-sm btn-outline-success"@else class="btn-sm btn-success"@endif
                    href="{{ route('edit_view', $tail->id) }}" >OK</a>
                <a @if($tail->name)style="color: lightgrey"@endif
                    href="{{route('tail', $tail->title)}}">{{$tail->id}} {{$tail->student}} - <u>{{$tail->subject}}</u>, <b>{{$tail->mark}}{{$tail->ects}} {{$tail->mark_n}}</b>, {{ $tail->date_in }}</a><br>
                <hr class="m-1">
            @endforeach
        </div>
    </div>
@endsection



