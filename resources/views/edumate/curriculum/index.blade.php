@extends('layouts.index')

@section('title', 'Індивідуальний навчальний план')

@section('page-banner')
    <x-page-banner title="Індивідуальний план" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')

    <!--====== Login Start ======-->

    <section class="login-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-register-content">
                        <h4 class="title">Для отримання індивідуального навчального плану введіть дані</h4>

                        <div class="login-register-form">
                            <form action="{{route('curriculum.store')}}" method="post">
                                @csrf
                                <div class="single-form">
                                    <label>Прізвище українською мовою з великої літери або номер залікової книжки *</label>
                                    <input type="text" name="number" value="{{ old('number') }}" placeholder="Прізвище або номер залікової книжки">
                                </div>

                                <div class="m-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="1" value="1">
                                        <label class="form-check-label" for="1">1 курс</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="radio" name="level" id="1pr" value="1pr">
                                        <label class="form-check-label" for="1pr">1 курс (прискорений)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="2" value="2" >
                                        <label class="form-check-label" for="2">2 курс</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="radio" name="level" id="2pr" value="2pr" >
                                        <label class="form-check-label" for="2pr">2 курс (прискорений)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="3" value="3" >
                                        <label class="form-check-label" for="3">3 курс</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="radio" name="level" id="3pr" value="3pr" >
                                        <label class="form-check-label" for="3">3 курс (прискорений)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="4" value="4" >
                                        <label class="form-check-label" for="4">4 курс</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="radio" name="level" id="1onp" value="1onp" >
                                        <label class="form-check-label" for="1onp">1 курс (магістерський) ОНП, група 51М</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="level" id="1opp" value="1opp" >
                                        <label class="form-check-label" for="1opp">1 курс (магістерський) ОПП, група 52М, 53М, 54М, 55М</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="level" id="2m" value="2m" disabled>
                                        <label class="form-check-label" for="2m">2 курс (магістерський)</label>
                                    </div>
                                </div>


                                <div class="single-form">
                                    <button type="submit" class="main-btn btn-block">Відобразити план</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Login Ends ======-->

@endsection
