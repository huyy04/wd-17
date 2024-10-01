<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/remos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 17:22:56 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Remos eCommerce Admin Dashboard HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_admin/css/style.css') }}">



    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('assets_admin/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('assets_admin/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ url('assets_admin/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('assets_admin/images/favicon.png') }}">

</head>

<body class="body">

<!-- #wrapper -->
<div id="wrapper">
    <!-- #page -->
    <div id="page" class="">
        <!-- layout-wrap -->
        <div class="layout-wrap">
            <!-- preload -->
            <div id="preload" class="preload-container">
                <div class="preloading">
                    <span></span>
                </div>
            </div>
            <!-- /preload -->
            <!-- section-menu-left -->
            @include('layout.admin.menu_left')
            <!-- /section-menu-left -->
            <!-- section-content-right -->
            <div class="section-content-right">
                <!-- header-dashboard -->
                @include('layout.admin.menu_top')
                <!-- /header-dashboard -->
                <!-- main-content -->
                @yield('content')
                <!-- /main-content -->
            </div>
            <!-- /section-content-right -->
        </div>
        <!-- /layout-wrap -->
    </div>
    <!-- /#page -->
</div>
<!-- /#wrapper -->

<!-- Javascript -->
<script src="{{ asset('assets_admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets_admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets_admin/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets_admin/js/zoom.js') }}"></script>
<script src="{{ asset('assets_admin/js/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('assets_admin/js/apexcharts/line-chart-1.js') }}"></script>
<script src="{{ asset('assets_admin/js/apexcharts/line-chart-2.js') }}"></script>
<script src="{{ asset('assets_admin/js/apexcharts/line-chart-3.js') }}"></script>
<script src="{{ asset('assets_admin/js/apexcharts/line-chart-4.js') }}"></script>
<script src="{{ asset('assets_admin/js/apexcharts/line-chart-5.js') }}"></script>
<script src="{{ asset('assets_admin/js/apexcharts/line-chart-6.js') }}"></script>
<script src="{{ asset('assets_admin/js/switcher.js') }}"></script>
<script src="{{ asset('assets_admin/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets_admin/js/main.js') }}"></script>

</body>


<!-- Mirrored from themesflat.co/html/remos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 17:23:42 GMT -->
</html>
