<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'AgroMaster')</title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/site.webmanifest') }}">

        <meta property="og:title" content="">
        <meta property="og:site_name" content="">
        <meta property="og:url" content="{{ route('home') }}">
        <meta property="og:description" content="">
        <meta property="og:image" content="{{ asset('/apple-touch-icon.png') }} " />
        <meta property="og:image:width" content="160"/>
        <meta property="og:image:height" content="160"/>



        <!-- Fonts -->
{{--        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

        <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
        <link rel="stylesheet" href="{{ asset("css/plugins/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/plugins/fontawesome.min.css") }}">
        <link rel="stylesheet" href="{{ asset("css/plugins/default.css") }}">

        <!--===== Plugins CSS (All Plugins Files) =====-->
        <link rel="stylesheet" href="{{ asset("css/plugins/animate.css") }}">
        <link rel="stylesheet" href="{{ asset("css/plugins/slick.css") }}">
        <link rel="stylesheet" href="{{ asset("css/plugins/magnific-popup.css") }}">


{{--        <link rel="stylesheet" href="{{ asset("build/assets/style.css") }}">--}}
        @vite(['resources/css/app.css', 'resources/sass/style.scss', 'resources/js/app.js'])

    </head>
    <body class="">

        @include('edumate.header')


        @yield('page-banner')

        @yield('content')

        @include('edumate.newsletter')


{{--        @include('edumate.footer')--}}


        @include('sweetalert::alert')
        <!--====== Jquery js ======-->
        <script src="{{ asset("js/jquery-3.5.1.min.js") }}"></script>
        <script src="{{ asset("js/modernizr-3.7.1.min.js") }}"></script>

        <!--====== All Plugins js ======-->
        <script src="{{ asset("js/plugins/popper.min.js") }}"></script>
        <script src="{{ asset("js/plugins/bootstrap.min.js") }}"></script>
        <script src="{{ asset("js/plugins/slick.min.js") }}"></script>
        <script src="{{ asset("js/plugins/jquery.magnific-popup.min.js") }}"></script>
        <script src="{{ asset("js/plugins/jquery.appear.min.js") }}"></script>
        <script src="{{ asset("js/plugins/imagesloaded.pkgd.min.js") }}"></script>
        <script src="{{ asset("js/plugins/isotope.pkgd.min.js") }}"></script>
        <script src="{{ asset("js/plugins/wow.min.js") }}"></script>
{{--        <script src="{{ asset("js/plugins/ajax-contact.js") }}"></script>--}}

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
        <!-- <script src="assets/js/plugin.min.js"></script> -->

        <!--====== Main Activation  js ======-->
        <script src="{{ asset("js/main.js") }}"></script>
    </body>
</html>
