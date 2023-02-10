<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Admin')</title>



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

    <link rel="stylesheet" href="{{ asset("vendor/select2/select2.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/summernote/summernote-bs4.css") }}">


    {{--        <link rel="stylesheet" href="{{ asset("build/assets/style.css") }}">--}}
    @vite(['resources/css/app.css', 'resources/sass/style.scss', 'resources/js/app.js'])
{{--    <link rel="stylesheet" href="{{ asset("css/plugins/bootstrap.min.css") }}">--}}
</head>
<body class="">

@include('admin.layouts.header')


{{--@yield('page-banner')--}}

@yield('content')

{{--@include('edumate.newsletter')--}}


{{--@include('edumate.footer')--}}


@include('sweetalert::alert')
<!--====== Jquery js ======-->
<script src="{{ asset("js/jquery-3.5.1.min.js") }}"></script>
<script src="{{ asset("js/modernizr-3.7.1.min.js") }}"></script>

<!--====== All Plugins js ======-->
<script src="{{ asset("js/plugins/popper.min.js") }}"></script>
<script src="{{ asset("js/plugins/bootstrap.min.js") }}"></script>
<script src="{{ asset("js/plugins/slick.min.js") }}"></script>
{{--<script src="{{ asset("js/plugins/jquery.magnific-popup.min.js") }}"></script>--}}
{{--<script src="{{ asset("js/plugins/jquery.appear.min.js") }}"></script>--}}
{{--<script src="{{ asset("js/plugins/imagesloaded.pkgd.min.js") }}"></script>--}}
{{--<script src="{{ asset("js/plugins/isotope.pkgd.min.js") }}"></script>--}}
{{--<script src="{{ asset("js/plugins/wow.min.js") }}"></script>--}}
{{--        <script src="{{ asset("js/plugins/ajax-contact.js") }}"></script>--}}

<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
<!-- <script src="assets/js/plugin.min.js"></script> -->

<!--====== Main Activation  js ======-->
<script src="{{ asset("js/main.js") }}"></script>

<script src="{{ asset("vendor/select2/select2.min.js") }}"></script>
<script src="{{ asset("vendor/summernote/summernote.js") }}"></script>
<script>$(document).ready(function() {
    $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

</script>

</body>
</html>

