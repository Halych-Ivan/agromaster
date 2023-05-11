<!--====== Header Start ======-->
<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                <div class="header-top-left">
                    <ul class="header-meta">
                        <li><a href="mailto://agromaster.pp.ua@ukr.net">{{\App\Config::EMAIL}}</a></li>
                    </ul>
                </div>
                <div class="header-top-right ">
                    <div class="header-link">
                        <a class="notice" href="notice.html">Notice </a>
@if (Route::has('login'))
@auth
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
@else
                        <a class="login" href="{{ route('login') }}">Login</a>
@if (Route::has('register'))
                        <a class="register" href="{{ route('register') }}">Register</a>
@endif
@endauth
@endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navigation" class="navigation navigation-landscape">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo ml-20">
                        <a href="{{ route('home') }}"><img src="{{asset('/logo.png')}}" alt="ФМІ"></a>
                    </div>
                </div>
                <div class="col-lg-8 position-static">
                    <div class="nav-toggle"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li>

                                <a href="{{route('home')}}">{{__('Головна')}}</a>
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="index.html">Home 01</a></li>--}}
{{--                                    <li><a href="index-2.html">Home 02</a></li>--}}
{{--                                    <li><a href="index-3.html">Home 03</a></li>--}}
{{--                                </ul>--}}
                            </li>

                            <li>
                                <a href="{{ route('admission') }}">{{__('Вступ')}}</a>
                            </li>

                            <li>
                                <a href="#">{{__('Навчання')}}</a>
                                <ul class="nav-dropdown nav-submenu">
{{--                                    <li>--}}
{{--                                        <a href="#">{{__('Освітні програми')}}</a>--}}
{{--                                        <ul class="nav-dropdown nav-submenu">--}}
{{--                                            <li><a href="#">{{__('ОП Агроінженерія - бакалавр')}}</a></li>--}}
{{--                                            <li><a href="#">{{__('ОПП Агроінженерія - магістр')}}</a></li>--}}
{{--                                            <li><a href="#">{{__('ОНП Агроінженерія - магістр')}}</a></li>--}}
{{--                                            <li><a href="#">{{__('Автомобільний транспорт')}}</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href="{{route('schedule')}}">{{__('Розклад занять')}}</a>

{{--                                        <ul class="nav-dropdown nav-submenu">--}}
{{--                                            <li><a href="our-courses-list.html">Courses List</a></li>--}}
{{--                                            <li><a href="our-courses-list-left-sidebar.html">Courses List Left Sidebar </a></li>--}}
{{--                                            <li><a href="our-courses-list-right-sidebar.html">Courses List Right Sidebar</a></li>--}}
{{--                                        </ul>--}}
                                    </li>
                                    <li><a href="{{route('session')}}">{{__('Розклад іспитів')}}</a></li>
                                    <li><a href="{{ route('curriculum') }}">{{__('Індивідуальний графік')}}</a></li>
                                    <li><a href="{{ route('statement') }}">{{__('Зразок заяви')}}</a></li>
                                    <li><a href="{{ route('registration') }}">{{__('Реєстрація на ЄВІ')}}</a></li>
{{--                                <li><a href="#">{{__('Списки груп')}}</a></li>--}}
                                </ul>
                            </li>

{{--                            <li>--}}
{{--                                <a href="#">{{__('Наука')}}</a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="event.html">Event 01</a></li>--}}
{{--                                    <li><a href="event-2.html">Event 02</a></li>--}}
{{--                                    <li><a href="event-details.html">Event Details</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="{{route('blog')}}">{{__('Новини')}}</a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="about-us.html">About</a></li>--}}
{{--                                    <li><a href="teachers.html">Teachers</a></li>--}}
{{--                                    <li><a href="teacher-details.html">Teachers Details</a></li>--}}
{{--                                    <li><a href="gallery.html">Gallery</a></li>--}}
{{--                                    <li><a href="gallery-masonry.html">Gallery Masonry</a></li>--}}
{{--                                    <li><a href="testimonial.html">Testimonial</a></li>--}}
{{--                                    <li><a href="faq.html">FAQ'S</a></li>--}}
{{--                                    <li><a href="notice.html">Notice</a></li>--}}
{{--                                    <li><a href="login.html">Login</a></li>--}}
{{--                                    <li><a href="register.html">Register</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a class="active" href="#">Shop</a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a class="active" href="shop.html">Shop </a></li>--}}
{{--                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>--}}
{{--                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>--}}
{{--                                    <li><a href="product-details.html">Shop Details</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#">Blog</a>--}}
{{--                                <ul class="nav-dropdown nav-submenu">--}}
{{--                                    <li><a href="blog.html">Blog </a></li>--}}
{{--                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>--}}
{{--                                    <li><a href="blog-right-sideba.html">Blog Right Sidebar</a></li>--}}
{{--                                    <li><a href="blog-details.html">Blog Details</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}


{{--                            <li><a href="contact">{{ __('Контакти') }}</a></li>--}}
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 position-static">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--====== Header Ends ======-->
