{{--@include('admin.layouts.head')--}}

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('/admin-panel/images/favicon.png')}}">
<title>@yield('title', 'Admin Panel')</title>

<link rel="canonical" href="">
<link href="{{asset('/admin-panel/libs/chartist/chartist.min.css')}}" rel="stylesheet">
<link href="{{asset('/admin-panel/libs/chartist/chartist-init.css')}}" rel="stylesheet">
<link href="{{asset('/admin-panel/libs/chartist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
<link href="{{asset('/admin-panel/libs/c3/c3.min.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('/admin-panel/css/style.min.css')}}" rel="stylesheet">
