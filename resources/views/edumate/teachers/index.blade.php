@extends('layouts.index')

@section('title', 'Індивідуальний навчальний план')

@section('page-banner')
    <x-page-banner title="Викладачі" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')

    <!--====== Top Course Ends ======-->

    <section class="teachers-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="courses-menu pt-40 text-center">
                        <ul class="menu-items">
                            <li data-filter="*" class="active">Всі</li>
                            @foreach($cathedras as $cathedra)
                                <li data-filter=".{{$cathedra->abbr}}">{{$cathedra->abbr}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="courses-wrapper">
                <div class="row grid">
                    @foreach($teachers as $teacher)
                        <div class="col-md-3 col-sm-6 teachers-col {{$teacher->cathedra->abbr??''}}">
                            <div class="single-teacher mt-80 text-center">
                                <div class="teacher-social">
                                    <ul class="social">
{{--                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
                                    </ul>
                                </div>
                                <div class="teacher-image">
                                    <a href="#">
                                        <img src="{{$teacher->photo??''}}" width="266" height="359" alt="">
                                    </a>
                                </div>
                                <div class="teacher-content">
                                    <h4 class="name"><a href="#">{{ $teacher->name }}</a></h4>
                                    <span class="designation">{{$teacher->position}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <ul class="pagination-items text-center">
                <li><a class="active" href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#">04</a></li>
                <li><a href="#">05</a></li>
            </ul>
        </div>
    </section>



@endsection
