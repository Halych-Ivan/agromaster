<nav class="navbar top-navbar navbar-expand-md navbar-dark">

    <div class="navbar-header">
        <!-- This is for the sidebar toggle which is visible on mobile only -->
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
            <i class="ti-menu ti-close"></i>
        </a>

        <!-- Logo -->
        <a class="navbar-brand" href="{{route('home')}}">
            <!-- Logo icon -->
            <b class="logo-icon">
                <img src="{{asset('/')}}/favicon-32x32.png" alt="homepage" class="light-logo">
            </b>
            <span class="logo-text">
                <img src="{{asset('/')}}/logo-text.png" class="light-logo" alt="homepage">
            </span>
        </a>

        <!-- Toggle which is visible on mobile only -->
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
           data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
           aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti-more"></i>
        </a>
    </div>

    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto float-left">
            <!-- This is  -->
            <li class="nav-item">
                <a class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                   href="javascript:void(0)"><i class="ti-menu"></i></a>
            </li>

            <!-- Search -->
        @include('cabinet.includes.search')

        <!-- Mega Menu -->
            @include('cabinet.includes.mega-dropdown-menu')
        </ul>

        <!-- Right side toggle and nav items -->
        <ul class="navbar-nav float-right">

            <!-- Comment -->
        @include('cabinet.includes.notifications')

        <!-- Messages -->
        @include('cabinet.includes.messages')

        <!-- Profile -->
        @include('cabinet.includes.profile')

        <!-- Language -->
            @include('cabinet.includes.language')

        </ul>
    </div>
</nav>
