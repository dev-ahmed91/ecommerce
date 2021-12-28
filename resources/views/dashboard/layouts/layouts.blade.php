<!doctype html>
<html class="no-js " lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Dashboard :: @yield('title') </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('assets/dashboard/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/dashboard/plugins/charts-c3/plugin.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/dashboard/plugins/morrisjs/morris.min.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/style.min.css')}}">
    <!-- Alerts Messages -->
    @notify_css

    @yield('style')
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/dashboard/images/loader.svg')}}" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Right Sidebar -->
@include('dashboard.layouts.right_side_bar')

<!-- Left Sidebar -->
@include('dashboard.layouts.menu')



<!-- Main Content -->
@yield('content')


<!-- Jquery Core Js -->
<script src="{{ asset('assets/dashboard/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ asset('assets/dashboard/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ asset('assets/dashboard/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('assets/dashboard/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
<script src="{{ asset('assets/dashboard/bundles/c3.bundle.js') }}"></script>

<script src="{{ asset('assets/dashboard/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/pages/index.js') }}"></script>

<!-- Alerts Messages -->
@notify_js
@notify_render

@yield('script')
</body>
</html>
