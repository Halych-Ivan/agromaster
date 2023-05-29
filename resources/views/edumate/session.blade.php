@extends('layouts.index')

@section('title', 'Розклад іспитів')

@section('page-banner')
    <x-page-banner title="Розклад іспитів" img="/images/page-banner-1.jpg"></x-page-banner>
@endsection

@section('content')
    <?php
    $folder = '2022-2023-II';

    $data = [
        [   'title' => '1 курс',
            'data' => [
                ['title'=>'11M (208-22б-01)',           'file'=>'11М.pdf'],
                ['title'=>'12M (208-22б-02)',           'file'=>'12М.pdf'],
                ['title'=>'13M (208-22б-03)',           'file'=>'13М.pdf'],
                ['title'=>'14АТ (274-22б-01)',          'file'=>'14АТ.pdf'],
            ]
        ],

        [   'title' => '2 курс, 1 (скорочений термін навчання)',
            'data' => [
                ['title'=>'21M (208-21б-01)',           'file'=>'21М.pdf'],
                ['title'=>'22M (208-21б-02)',           'file'=>'22М.pdf'],
                ['title'=>'23M (208-21б-03)',           'file'=>'23М.pdf'],
                ['title'=>'25M (208-21б-04)',           'file'=>'25М.pdf'],
                ['title'=>'26Mпр (208-22б-стн-3-01)',   'file'=>'26Мпр.pdf'],
                ['title'=>'24АТ, 24АТпр',               'file'=>'24АТ+24АТпр.pdf'],
            ]
        ],

        [   'title' => '3 курс, 2 (скорочений термін навчання)',
            'data' => [
                ['title'=>'31M (208-20б-01)',           'file'=>'31М+34Мпр.pdf'],
                ['title'=>'32M (208-20б-02)',           'file'=>'32М+35Мпр.pdf'],
                ['title'=>'33M (208-20б-03)',           'file'=>'33М+36Мпр.pdf'],
                ['title'=>'34Mпр (208-21б-стн-3-01)',   'file'=>'31М+34Мпр.pdf'],
                ['title'=>'35Mпр (208-21б-стн-3-02)',   'file'=>'32М+35Мпр.pdf'],
                ['title'=>'36Mпр (208-21б-стн-3-03)',   'file'=>'33М+36Мпр.pdf'],
                ['title'=>'38M (208-20б-04)',           'file'=>'38М+38Мпр.pdf'],
                ['title'=>'38Mпр (208-21б-стн-3-04)',   'file'=>'38М+38Мпр.pdf'],
                ['title'=>'37АТ (274-20б-01)',                       'file'=>'37АТ.pdf'],
            ]
        ],

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

        [   'title' => '1 (магістерський) курс',
            'data' => [
                ['title'=>'51M (208-22м-01)',           'file'=>'51М.pdf'],
                ['title'=>'52M (208-22м-02)',           'file'=>'52М+53М.pdf'],
                ['title'=>'53M (208-22м-03)',           'file'=>'52М+53М.pdf'],
                ['title'=>'54M (208-22м-04)',           'file'=>'54М+55М.pdf'],
                ['title'=>'55M (208-22м-05)',           'file'=>'54М+55М.pdf'],
                ['title'=>'56АТ (274-22м-01)',          'file'=>'56АТ.pdf'],
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
