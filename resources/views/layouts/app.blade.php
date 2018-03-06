<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CRUD APP">
    <meta name="keywords" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="assets/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="assets/vendor/whirl/dist/whirl.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="assets/vendor/weather-icons/css/weather-icons.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="assets/css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="assets/css/app.css" id="maincss">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ route('users.index') }}">Users</a></li>
                        <li><a href="{{ route('roles.index') }}">Roles</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="assets/vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <!-- JQUERY-->
   <script src="assets/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="assets/vendor/popper.js/dist/umd/popper.js"></script>
   <script src="assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="assets/vendor/js-storage/js.storage.js"></script>
   <!-- JQUERY EASING-->
   <script src="assets/vendor/jquery.easing/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="assets/vendor/animo/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.js"></script>
   <!-- SCREENFULL-->
   <script src="assets/vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="assets/vendor/jquery-localize/dist/jquery.localize.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
   <!-- FLOT CHART-->
   <script src="assets/vendor/flot/jquery.flot.js"></script>
   <script src="assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js"></script>
   <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
   <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
   <script src="assets/vendor/flot/jquery.flot.time.js"></script>
   <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
   <script src="assets/vendor/jquery.flot.spline/jquery.flot.spline.js"></script>
   <!-- EASY PIE CHART-->
   <script src="assets/vendor/easy-pie-chart/dist/jquery.easypiechart.js"></script>
   <!-- MOMENT JS-->
   <script src="assets/vendor/moment/min/moment-with-locales.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>
</body>
</html>
