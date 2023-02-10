@extends('layouts.index')

@section('title', 'Розклад іспитів')

@section('page-banner')
    <x-page-banner title="Розклад іспитів" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <section class="container">
        <div class="container ml-15">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2 mt-30">
                        <h2 class="title">1 курс</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="single-notice">
                    <p>
                        <span class="notice-title inline"><a href="{{ asset('/pdf/schedule/208/11М (208-22б-01).pdf') }}" target="_blank">11М (208-22б-01)</a> | </span>
                        <span class="notice-title inline"><a href="{{ asset('/pdf/schedule/208/12М (208-22б-02).pdf') }}" target="_blank">12М (208-22б-02)</a> | </span>
                        <span class="notice-title inline"><a href="{{ asset('/pdf/schedule/208/13М (208-22б-03).pdf') }}" target="_blank">13М (208-22б-03)</a></span>
                    </p>
                    <p class="notice-title"><a href="{{ asset('/pdf/schedule/274/14АТ (274-22б-01).pdf') }}" target="_blank">14АТ (274-22б-01)</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2 mt-5">
                        <h2 class="title">2 курс, 1 прискорений</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="single-notice">
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/21М (208-21б-01).pdf') }}" target="_blank">21М (208-21б-01)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/22М (208-21б-02).pdf') }}" target="_blank">22М (208-21б-02)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/23М (208-21б-03).pdf') }}" target="_blank">23М (208-21б-03)</a></span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/25М (208-21б-04).pdf') }}" target="_blank">25М (208-21б-04)</a></span>
                    </p>
                    <p class="notice-title"><a href="{{ asset('/pdf/schedule/208/26Мпр (208-22б-стн-3-01).pdf') }}" target="_blank">26Мпр (208-22б-стн-3-01)</a></p>
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/274/24АТ (274-21б-01).pdf') }}" target="_blank">24АТ (274-21б-01)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/274/24АТпр (274-22б-стн-3-01).pdf') }}" target="_blank">24АТпр (274-22б-стн-3-01)</a></span>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2 mt-5">
                        <h2 class="title">3 курс, 2 прискорений</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="single-notice">
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/31М (208-20б-01).pdf') }}" target="_blank">31М (208-20б-01)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/32М (208-20б-02).pdf') }}" target="_blank">32М (208-20б-02)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/33М (208-20б-03).pdf') }}" target="_blank">33М (208-20б-03)</a></span>
                    </p>
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/34Мпр (208-21б-стн-3-01).pdf') }}" target="_blank">34Мпр (208-21б-стн-3-01)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/35Мпр (208-21б-стн-3-02).pdf') }}" target="_blank">35Мпр (208-21б-стн-3-02)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/36Мпр (208-21б-стн-3-03).pdf') }}" target="_blank">36Мпр (208-21б-стн-3-03)</a></span>
                    </p>
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/38М (208-20б-04).pdf') }}" target="_blank">38М (208-20б-04)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/38Мпр (208-21б-стн-3-04).pdf') }}" target="_blank">38Мпр (208-21б-стн-3-04)</a></span>
                    </p>

                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/274/37АТ (274-20б-01).pdf') }}" target="_blank">37АТ (274-20б-01)</a></span>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2 mt-5">
                        <h2 class="title">4 курс, 3 прискорений</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="single-notice">
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/41-43, 48.pdf') }}" target="_blank">41М, 42М, 43М 48М</a></span>
                    </p>
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/44пр-46пр, 48пр.pdf') }}" target="_blank">44Мпр, 45Мпр, 46Мпр, 48Мпр</a></span>
                    </p>

                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/274/47АТ, 47АТпр.pdf') }}" target="_blank">47АТ, 47АТпр</a></span>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2 mt-5">
                        <h2 class="title">1 курс (магістерський)</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="single-notice">
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/51М (208-22м-01).pdf') }}" target="_blank">51М (208-22м-01)</a></span>
                    </p>
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/52М (208-22м-02).pdf') }}" target="_blank">52М (208-22м-02)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/53М (208-22м-03).pdf') }}" target="_blank">53М (208-22м-03)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/54М (208-22м-04).pdf') }}" target="_blank">54М (208-22м-04)</a> | </span>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/208/55М (208-22м-05).pdf') }}" target="_blank">55М (208-22м-05)</a></span>
                    </p>
                    <p>
                        <span class="notice-title"><a href="{{ asset('/pdf/schedule/274/56АТ (274-22м-01).pdf') }}" target="_blank">56АТ (274-22м-01)</a></span>
                    </p>
                </div>
            </div>





        </div>
    </section>

@endsection
