@extends('layouts.index')

@section('title', 'Списки груп')

@section('page-banner')
    <x-page-banner title="Списки груп" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')

    @php($link = 'documents/lists/')

    <section class="container">
        <div class="container ml-10">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section-title-2 mt-30">
                        <h2 class="title">208 Агроінженерія</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title">
                        <a href="{{ asset($link.'/11М (208-22б-01).pdf') }}" target="_blank">11М (208-22б-01)</a>, |
                        <a href="{{ asset($link.'/12М (208-22б-02).pdf') }}" target="_blank">12М (208-22б-02)</a>, |
                        <a href="{{ asset($link.'/13М (208-22б-03).pdf') }}" target="_blank">13М (208-22б-03)</a>
                    </h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/208/208-2.pdf') }}" target="_blank">2 курс (21М, 22М, 23М, 25М, 26Мпр)</a></h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/208/208-3.pdf') }}" target="_blank">3 курс, (31М, 32М, 33М, 34Мпр, 35Мпр, 36Мпр, 38М, 38Мпр)</a></h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/208/208-4.pdf') }}" target="_blank">4 курс, (41М, 42М, 43М, 44Мпр, 45Мпр, 46Мпр, 48М, 48Мпр)</a></h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/208/208-5-ОНП.pdf') }}" target="_blank">1 курс магістерський ОНП (51М)</a></h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/208/208-5-ОПП.pdf') }}" target="_blank">1 курс магістерський ОПП (52М, 53М, 54М, 55М)</a></h3>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2 class="title">274 Автомобільний транспорт</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title">
                        <a href="{{ asset($link.'/14АТ (274-22б-01).pdf') }}" target="_blank">14АТ (274-22б-01)</a>
                    </h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/274/274-2.pdf') }}" target="_blank">2 курс (24АТ, 24АТпр)</a></h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/274/274-3.pdf') }}" target="_blank">3 курс, (37АТ)</a></h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/274/274-4.pdf') }}" target="_blank">4 курс, (47АТ, 47ТАпр)</a></h3>
                </div>
                <div class="single-notice">
                    <span class="number">-</span>
                    <h3 class="notice-title"><a href="{{ asset($link.'/274/274-5.pdf') }}" target="_blank">1 курс магістерський ОПП (56АТ)</a></h3>
                </div>
            </div>

        </div>
    </section>

@endsection
