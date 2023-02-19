@extends('layouts.index')

@section('title', '208 Агроінженерія')

@section('content')
<!--====== Slider Start ======-->
<section class="slider-area slider-active">
    <div class="single-slider d-flex align-items-center bg_cover" style="background-image: url(/images/sliders/slider-3.jpg);">
        <div class="container">
            <div class="slider-content">
                <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">Приєднуйся до еліти великої країни</h2>
                <ul class="slider-btn">
                    <li><a data-animation="fadeInUp" data-delay="0.6s" class="main-btn main-btn-2" href="#">{{__('Бакалавр')}}</a></li>
                    <li><a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="#">{{__('Магістр')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="single-slider d-flex align-items-center bg_cover" style="background-image: url(/images/sliders/slider-4.jpg);">
        <div class="container">
            <div class="slider-content">
                <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">Вища освіта Європейського рівня</h2>
                <ul class="slider-btn">
                    <li><a data-animation="fadeInUp" data-delay="0.6s" class="main-btn main-btn-2" href="#">{{__('Бакалавр')}}</a></li>
                    <li><a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="#">{{__('Магістр')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====== Slider Ends ======-->

<!--====== About Start ======-->
<section class="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-content">
                    <h2 class="about-title">Освітній центр <span>Educational Club</span></h2>
                    <span class="line"></span>
                    <p>Запрошуємо вступників пройти підготовку до складання національного мультипредметного тесту НМТ з предметів:<br>
                        - Українська мова;<br>
                        - Математика;<br>
                        - Історія України.<br>
                        Заняття проходять <u>on-line</u> та <b>безкоштовні</b></p>
                    <p class="">Успішне проходження навчання дає можливість підвищити конкурсний бал на 10 балів при вступі на будь-яку спеціальність університету</p>
                    <p class="">Відповідальний за супровід вступників під час навчання в освітньому центрі<br> Никифоров Антон: тел. (050) 640-76-74.</p>
                    <a class="main-btn" href="viber://chat?number=+380978503682">Написати Viber</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-30">
                    <div class="single-image image-1">
                        <img src="/images/about/about-1.webp" width="290" height="290" alt="about">
                    </div>
                    <div class="single-image image-2">
                        <img src="/images/about/about-2.webp" width="225" height="225" alt="about">
                    </div>
                    <div class="single-image image-3">
                        <img src="/images/about/about-3.webp" width="190" height="190" alt="about">
                    </div>
                    <div class="single-image image-4">
                        <img src="/images/about/about-4.webp" width="140" height="140" alt="about">
                    </div>

                    <div class="about-icon icon-1">
                        <img src="/images/icon/icon-1.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-2">
                        <img src="/images/icon/icon-2.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-3">
                        <img src="/images/icon/icon-3.webp" width="46" height="46" alt="icon">
                    </div>
                    <div class="about-icon icon-4">
                        <img src="/images/icon/icon-4.webp" width="46" height="46" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== About Ends ======-->

<!--====== Blog Start ======-->
<section class="mt-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-9">
                <div class="section-title-2 text-center">
                    <h2 class="title">{{__('Освітні програми')}}</h2>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="blog-wrapper">
            <div class="row blog-active">
                <div class="col-lg-4">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="">
                                <img src="/images/courses/courses-1.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="">ОП Агроінженерія (бакалавр)</a></h4>
                            <a href="" class="more">Детально <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="">
                                <img src="/images/courses/courses-3.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="">ОПП Агроінженерія (магістр)</a></h4>
                            <a href="" class="more">Детально <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="">
                                <img src="/images/courses/courses-4.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="">ОНП Агроінженерія (магістр-науковець)</a></h4>
                            <a href="" class="more">Детально <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Blog Ends ======-->

<!--====== Counter Start ======-->
<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper bg_cover" style="background-image: url(/images/counter-bg.jpg);">
            <div class="row">
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s"
                         data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count">3652</span> +</span>
                        <p>Студентів</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s"
                         data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count">7000</span> +</span>
                        <p>Бібліотечний фонд</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s"
                         data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count">90</span> +</span>
                        <p>Років історії</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s"
                         data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count">30</span> +</span>
                        <p>Нагород</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== Counter Ends ======-->

<!--====== Friends Start ======-->
<section class="blog-wrapper">
    <div class="container">
        <div class="row blog-active">
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-3.png" alt="">
                </div>
            </div>
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-8.png" alt="">
                </div>
            </div>
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-7.png" alt="">
                </div>
            </div>
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-1.png" alt="">
                </div>
            </div>
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-5.png" alt="">
                </div>
            </div>
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-6.png" alt="">
                </div>
            </div>
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-4.png" alt="">
                </div>
            </div>
            <div class="col-sm-2 mt-15 single-specialty text-center">
                <div class="box-content">
                    <img src="/images/friends/fr-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Friends Ends ======-->

<!--====== Campus Visit Start ======-->
<section class="campus-visit-area">
    <div class="container">
        <div class="campus-visit-wrapper">
            <div class="campus-image-col">
                <div class="campus-image">
                    <div class=" single-campus">
                        <img src="/images/campus/1.jpg" alt="">
                    </div>
                    <div class=" single-campus">
                        <img src="/images/campus/2.jpg" alt="">
                    </div>
                    <div class=" single-campus">
                        <img src="/images/campus/3.jpg" alt="">
                    </div>
                    <div class=" single-campus">
                        <img src="/images/campus/4.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="campus-content-col">
                <div class="campus-content">
                    <h2 class="campus-title">Довідкова інформація</h2>
                    <span class="line"></span>
                    <p>Відео-презентація</p>
                    <a class="play video-popup" href="https://www.youtube.com/watch?v=yAkquJnlGZg">Дивитись
                        відео</a>
                    <p>Консультації експертів приймальної комісії</p>
                    <a class="play" href="viber://chat?number=+380978503682"><i class="far fa-comment-dots"></i>
                        <span>Viber-консультація</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Campus Visit Ends ======-->




@endsection
