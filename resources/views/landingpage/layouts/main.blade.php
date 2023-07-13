<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- homev206:52-->

<head>
    <!-- Basic need -->
    <title>Movie App</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('landing_asset/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_asset/css/style.css') }}">

</head>

<body>
    <!--preloading-->
    <!-- <div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div> -->
    <!--end of preloading-->
    @include('landingpage.partials.header')

    @yield('konten')
    <!--end of latest new v2 section-->
    @include('landingpage.partials.footer')
    @include('landingpage.partials.auth')
   
    <script src="{{asset('landing_asset/js/jquery.js')}}"></script>
    <script src="{{asset('landing_asset/js/plugins.js')}}"></script>
    <script src="{{asset('landing_asset/js/plugins2.js')}}"></script>
    <script src="{{asset('landing_asset/js/custom.js')}}"></script>
</body>

<!-- homev207:28-->

</html>
