@extends('layouts.index')

@section('title', 'Розклад іспитів')

@section('page-banner')
    <x-page-banner title="Розклад іспитів" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <?php
    $folder = '2022-2023-II';

    $data = [
        [   'title' => '4 курс, 3 (скорочений термін навчання)',
            'data' => [
                ['title'=>'41M (208-19б-01)',           'file'=>'41М+42М.pdf'],
                ['title'=>'42M (208-19б-02)',           'file'=>'41М+42М.pdf'],
                ['title'=>'43M (208-19б-03)',           'file'=>'43М+44Мпр.pdf'],
                ['title'=>'44Mпр (208-20б-стн-3-01)',   'file'=>'43М+44Мпр.pdf'],
                ['title'=>'45Mпр (208-20б-стн-3-02)',   'file'=>'45Мпр+46Мпр.pdf'],
                ['title'=>'46Mпр (208-20б-стн-3-03)',   'file'=>'45Мпр+46Мпр.pdf'],
                ['title'=>'48M (208-19б-04)',           'file'=>'48М+48Мпр.pdf'],
                ['title'=>'48Mпр (208-20б-стн-3-04)',   'file'=>'48М+48Мпр.pdf'],
                ['title'=>'47АТ, 47АТпр',   'file'=>'47АТ+47АТпр.pdf'],
            ]
        ],
    ]



    ?>

    <section class="container">
        <div class="container ml-15">
            @foreach($data as $kurs)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-2 mt-30">
                            <h2 class="title">{{$kurs['title']}}</h2>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="single-notice">
                        @foreach($kurs['data'] as $item)
                            <p class="notice-title">
                                <a href="{{ asset('/pdf/schedule/'.$folder.'/'.$item['file']) }}" target="_blank">{{ $item['title'] }}</a>
                            </p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
