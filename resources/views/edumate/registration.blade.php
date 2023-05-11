@extends('layouts.index')

@section('title', 'Реєстрація на ЄВІ')

@section('page-banner')
        <x-page-banner title="Реєстрація на ЄВІ" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <section class="">
        <div class="container">
            <div class="row w-90 m-auto">
                <div class="notice-content">
                    <div class="single-notice">
                        <span class="number">--></span>
                        <h3 class="notice-title">Реєстрація на ЄВІ (у разі дистанційної реєстрації)</h3>
                        <p>Для офомлення екзаменаційного листка вам необхідно заповнити <b><u><a href="{{ asset('documents/statement/topic.pdf') }}">ЗАЯВУ-АНКЕТУ</a></u></b> та прислати на
                            електронну пошту <u>agro.master.ua@gmail.com</u> скановану заяву. <br>
                        Оригінал заяви відправити на нову пошту:
                            <ul class="ml-3">
                            <li>м. Харків, </li>
                            <li>нова пошта №55,</li>
                            <li>отримувач Олена Миколаївна Маймуліна</li>
                        </ul>
                        </p>
                        <p>Прохання заповнити гугл-форму для скорочення часу реєстрації</p>
                        <div class="btn btn-primary">
                            <a href="{{ asset('https://forms.gle/dX7LUxav6HHo7Rz7A') }}">Гугл-форма</a>
                        </div>
                        <div class="btn btn-success">
                            <a href="{{ asset('documents/statement/Zayava-anketa_YEVI_YEFVV_2023.pdf') }}">ЗАЯВА-АНКЕТА</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
