@extends('layouts.index')

@section('title', 'Оформлення договорів')

@section('page-banner')
{{--    <x-page-banner title="Оформлення договорів" img="/images/page-banner-1.jpg"></x-page-banner>--}}
@endsection

@section('content')
    <section class="notice-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2 class="title">Оформлення договору на навчання</h2>
                        <span class="line"></span>
                        <p>Для підтвердження вашого вступу необхідно підписати договір про навчання та контракт
                            про надання платних освітніх послуг.
                            Договір та контракт потрібно роздрукувати <u>на аркуші з двох сторін у трьох примірниках
                                кожен</u> та заповнити по зразку.</p>
                    </div>
                </div>
            </div>
            <div class="notice-content">
                <div class="single-notice">
                    <span class="number">1.</span>
                    <h3 class="notice-title">
                        <a href="{{ asset('storage/uploads/ДОГОВОР.pdf') }}"
                           target="_blank">Договір про надання освітніх послуг <u>(завантажити)</u></a>
                    </h3>
                    <p></p>
                </div>
                <div class="single-notice">
                    <span class="number">2.</span>
                    <h3 class="notice-title">
                        <a href="{{ asset('storage/uploads/КОНТРАКТ.pdf') }}"
                            target="_blank">Контракт <u>(завантажити)</u></a>
                    </h3>
                    <p></p>
                </div>

                <div class="single-notice">
                    <h4>Після заповнення необхідно прислати фото заповнених договорів та відправити їх
                        новою поштою на адресу:</h4>
                    <ul class="mt-2">
                        <li><h4 style="color: black;">- м. Харків, нова пошта №34,</h4></li>
                        <li><h4 style="color: black;">- Галич Іван Васильович,</h4></li>
                        <li><h4 style="color: black;">- (097) 850-36 82.</h4></li>
                    </ul>
                    <p>aбо кожного вівторка з 9:00 до 12:00 приїхати до університету за адресою м. Харків, вул. Різдвянa 19
                    (станція метро Центральний ринок) та заповнити договори</p>
                    <h4 class="mt-3">Фото заповнених договорів обов'язково відправити на електронну адресу: {{\App\Config::EMAIL}}</h4>
                </div>

                <div class="single-notice faq-wrapper">
                    <h4>Приклад заповнення договору та контракту:</h4>

                    <div class="accordion" id="accordion">

                        <div class="card mt-3">
                            <div class="card-header" id="headingFive">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse1">Магістратура</a>
                            </div>

                            <div id="collapse1" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <h5 class="mt-1">Контракт
                                        <a href="{{ asset('storage/uploads/КОНТРАКТ_(приклад_магістр_денна).pdf') }}"
                                           target="_blank"><u>денна форма навчання</u></a> ||
                                        <a href="{{ asset('storage/uploads/КОНТРАКТ_(приклад_магістр_заочна).pdf') }}"
                                           target="_blank"><u>заочна форма навчання</u></a>
                                    </h5>
                                    <h5 class="mt-3">Договір
                                        <a href="{{ asset('storage/uploads/ДОГОВОР_(приклад_208М).pdf') }}"
                                           target="_blank"><u>208 Агроінженерія</u></a> ||
                                        <a href="{{ asset('storage/uploads/ДОГОВОР_(приклад_274М).pdf') }}"
                                           target="_blank"><u>274 Автомобільний транспорт</u></a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header" id="headingFive">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse2">Бакалаврат</a>
                            </div>

                            <div id="collapse2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <h5 class="mt-1">Контракт
                                        <a href="{{ asset('storage/uploads/КОНТРАКТ_(приклад_бакалавр_денна).pdf') }}"
                                           target="_blank"><u>денна форма навчання</u></a> ||
                                        <a href="{{ asset('storage/uploads/КОНТРАКТ_(приклад_бакалавр_заочна).pdf') }}"
                                           target="_blank"><u>заочна форма навчання</u></a>
                                    </h5>
                                    <h5 class="mt-3">Договір
                                        <a href="{{ asset('storage/uploads/ДОГОВОР_(приклад_208Б).pdf') }}"
                                           target="_blank"><u>208 Агроінженерія</u></a> ||
                                        <a href="{{ asset('storage/uploads/ДОГОВОР_(приклад_274Б).pdf') }}"
                                           target="_blank"><u>274 Автомобільний транспорт</u></a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
