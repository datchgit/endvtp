
<!doctype html>
<html lang="en">

<head>
<title>VTP - INTERNATIONALE GROUP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('assets/ressources/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/ressources/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/ressources/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/ressources/vendor/charts-c3/plugin.css')}}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>
    .annual_report .c3-axis.c3-axis-y{ display: none;}
    .annual_report .c3-axis.c3-axis-x{ display: none;}

</style>
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('assets/ressources/css/main.css')}}">
</head>

<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">



@include('dashboard.layout.topbar')
    <!-- main left menu -->
     @include('dashboard.layout.sidebar')

    <!-- rightbar icon div -->
     @include('dashboard.layout.rigthbar')
    <!-- mani page content body part -->
     @yield('content')
</div>

<!-- Javascript -->
<script src="{{asset('assets/ressources/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/ressources/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('assets/ressources/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets/ressources/bundles/c3.bundle.js')}}"></script>


<!-- page js file -->
<script src="{{asset('assets/ressources/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/ressources/js/index8.js')}}"></script>
<script src="{{asset('assets/ressources/js/logout.js')}}"></script>
</body>
</html>
