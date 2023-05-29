@extends('layouts.index')

@section('title', 'Освітня програма')
@section('description', 'Освітня прорама "Агроінженерія", вихідні матеріали для оформлення програм дисциплін для здобувачів вищої освіти 2023 року вступу')

@section('page-banner')
    <x-page-banner title="Освітня програма" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <section class="">
        <div class="container">
            <div class="row w-90 m-auto">
                <div class="notice-content">
                    <div class="single-notice">
                        <h3 class="notice-title">Освітні програми спеціальності 208 "Агроінженерія"</h3>
                        <div class="mt-3">
                            <div class="btn btn-primary">
                                <a href="{{ asset('pdf/opp/OP-208-agroinzheneriya-bakalavr-2023.pdf') }}">Освітня програма
                                    "Агроінженерія" (бакалавр)</a>
                            </div>
                            <div class="btn btn-primary mt-1">
                                <a href="{{ asset('pdf/opp/OP-208-agroinzheneriya-opp-2022.pdf') }}">Освітня програма
                                    "Агроінженерія" (магістр, ОПП)</a>
                            </div>
                            <div class="btn btn-primary mt-1">
                                <a href="{{ asset('pdf/opp/OP-208-agroinzheneriya-onp-2022.pdf') }}">Освітня програма
                                    "Агроінженерія" (магістр, ОНП)</a>
                            </div>
                        </div>

                        <h3 class="notice-title"><a
                                href="{{ asset('pdf/opp/OP-208-agroinzheneriya-bakalavr-2023.pdf') }}">Навчальний план вступу 2023 року
                                </a></h3>
                        <div class="mt-3">
                            <div class="btn btn-primary">
                                <a href="{{ asset('pdf/opp/NP-208-agroinzheneriya-bakalavr-2023.pdf') }}">Навчальний
                                    план "Агроінженерія" (бакалавр)</a>
                            </div>
                            <div class="btn btn-primary mt-1">
                                <a href="{{ asset('pdf/opp/NP-208-agroinzheneriya-magistr-2023.pdf') }}">Навчальний план
                                    "Агроінженерія" (магістр, ОПП)</a>
                            </div>
                            <div class="btn btn-primary mt-1">
                                <a href="{{ asset('pdf/opp/NP-208-agroinzheneriya-magistr-onp-2023.pdf') }}">Навчальний план
                                    "Агроінженерія" (магістр, ОНП)</a>
                            </div>
                        </div>
                        <p>
                            Згідно з навчальним планом за спеціальністю 208 Агроінженерія та відповідним рівнем вищої освіти
                            викладачам необхідно розробити та затвердити на кафедрах робочі програми навчальних дисциплін і
                            силабуси відповідно до <u><b><a href="https://btu.kharkov.ua/pro-universitet/publichna-informatsiya/normatyvna-baza/"> положення ДБТУ</a></b></u>.
                            <br>
                            Розроблені робочі програми та силабуси слід відправити на затвердження горанту освітньої програми на
                            електронну адресу <b><u>agromaster.info@ukr.net</u></b>.
                        </p>

                        <p>
                            Вихідні матеріали для розробки робочих програм за спеціальністю:
                        </p>
                        <ui>
                            <li>
                                <a href="{{asset('pdf/opp/208-agroinzheneriya-bakalavr.pdf')}}"><u>Стандарт вищої освіти
                                        України спеціальності
                                        <b>208 Агроінженерія</b>, рівень вищої освіти <b>перший (бакалаврський)</b></u></a>
                            </li>
                            <li>
                                <a href="{{asset('pdf/opp/208-agroinzheneriya-magistr.pdf')}}"><u>Стандарт вищої освіти
                                        України спеціальності
                                        <b>208 Агроінженерія</b>, рівень вищої освіти <b>другий (магістерський)</b></u></a>
                            </li>
                            <li>
                                <a href="{{asset('pdf/opp/Polozhennya-pro-syllabus.pdf')}}"><u>Положення
                                        про силабус навчальної дисципліни в ДБТУ</u></a>
                            </li>
                            <li>
                                <a href="{{asset('pdf/opp/Polozhennya-pro-robochu-prohramu-dystsypliny-DBTU.pdf')}}"><u>Положення
                                        про робочу програму навчальної дисципліни в ДБТУ</u></a>
                            </li>
                            <li>
                                <a href="{{asset('pdf/opp/Robocha-prohrama.docx')}}"><u>Шаблон робочої
                                        програми навчальної дисципліни</u></a>
                            </li>
                        </ui>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
