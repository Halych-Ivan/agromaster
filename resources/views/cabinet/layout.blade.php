
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-32x32.png')}}">

    <title>@yield('title', 'AgroMaster')</title>

    <!-- Custom CSS -->
    <link href="{{asset('/cabinet/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
<div id="main-wrapper">

    <!-- Topbar header - style you can find in pages.scss -->
    <header class="topbar">
        @include('cabinet.includes.header')
    </header>
    <!-- End Topbar header -->

    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <aside class="left-sidebar">
        @include('cabinet.includes.sidebar')
    </aside>

    <!-- Page wrapper  -->
    <div class="page-wrapper">

        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Dashboard</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                <div class="d-flex mt-2 justify-content-end">
                    <div class="d-flex mr-3 ml-2">
                        <div class="chart-text mr-2">
                            <h6 class="mb-0"><small>THIS MONTH</small></h6>
                            <h4 class="mt-0 text-info">$58,356</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="monthchart"></div>
                        </div>
                    </div>
                    <div class="d-flex ml-2">
                        <div class="chart-text mr-2">
                            <h6 class="mb-0"><small>LAST MONTH</small></h6>
                            <h4 class="mt-0 text-primary">$48,356</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="lastmonthchart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <!-- footer -->
        <footer class="footer">
            © 2020 Material Pro Admin by wrappixel.com
        </footer>
    </div>
    <!-- End Page wrapper  -->

</div>
<!-- End Wrapper -->

@include('cabinet.includes.js')
</body>
</html>
