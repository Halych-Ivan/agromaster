@extends('layouts.index')

@section('title', 'Зразок заяви')

@section('page-banner')
        <x-page-banner title="Зразок заяви" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="notice-content">
                    <div class="single-notice">
                        <span class="number">--></span>
                        <h3 class="notice-title">Заява на складання заліку/іспиту та видачу екзаменаційного листа</h3>
                        <p>Заява пишеться здобувачем освіти власноруч та передається методисту факультету. Після підпису
                        заяви деканом (заступником декана) екзаменаційний лист направляється до викладача, який його заповнює
                        у разі успішного складання заліку/іспиту. </p>
                        <div class="btn btn-dark">
                            <a href="{{ asset('pdf/statement/debt.pdf') }}">Зразок заяви</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
