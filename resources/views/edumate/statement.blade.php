@extends('layouts.index')

@section('title', 'Зразок заяви')

@section('page-banner')
        <x-page-banner title="Зразок заяви" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <section class="">
        <div class="container">
            <div class="row w-90 m-auto">
                <div class="notice-content">
                    <div class="single-notice">
                        <span class="number">--></span>
                        <h3 class="notice-title">Заява на закріплення теми кваліфікаційної роботи та керівника</h3>
                        <p>Заява пишеться здобувачем освіти власноруч, завіряється візою керівника та завідувачем
                        випускової кафедри та передається на затвердження до деканату.</p>
                        <div class="btn btn-dark">
                            <a href="{{ asset('documents/statement/topic.pdf') }}">Зразок заяви</a>
                        </div>
                    </div>
                    <div class="single-notice">
                        <span class="number">--></span>
                        <h3 class="notice-title">Заява на складання заліку/іспиту та видачу екзаменаційного листа</h3>
                        <p>Заява пишеться здобувачем освіти власноруч та передається методисту факультету. Після підпису
                            заяви деканом (заступником декана) екзаменаційний лист направляється до викладача, який його заповнює
                            у разі успішного складання заліку/іспиту. </p>
                        <div class="btn btn-dark">
                            <a href="{{ asset('documents/statement/debt.pdf') }}">Зразок заяви</a>
                        </div>
                    </div>
                    <div class="single-notice">
                        <span class="number">--></span>
                        <h3 class="notice-title">Заява на відрахування за власним бажанням</h3>
                        <p>Заява пишеться здобувачем освіти власноруч та передається методисту факультету.</p>
                        <div class="btn btn-dark">
                            <a href="{{ asset('documents/statement/exit.pdf') }}">Зразок заяви</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
