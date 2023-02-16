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
