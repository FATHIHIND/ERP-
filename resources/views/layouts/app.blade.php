<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="../img/Captubbbre.ico" type="image/x-icon">	
</head>
<body>
    <div id="app" style="background-color:#015d56;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <div class="sidebar-brand-text mx-3">
      <img class="img-profile rounded-circle" style="height:50px;width:50px;" src="../img/Captubbbr.PNG">
      </div>
      <div class="search-box">
       <input type="text" name="" class="search-txt" placeholder="Tapez pour rechercher"/>
       <a class="search-btn" href="#">
       <i class="fas fa-search"></i>
       </a>
     </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                       
                    </ul>
                </div>
            </div>
        </nav>
<!--  -->

        @include('layouts.nav')
        
        <div style="background-color:#015d56;">
            @yield('content')
</div>
        <!-- breadcrumb #015d56 --> 
<!-- @yield('breadcrumb') -->
    </div>
</body>
<footer style="text-align:center;">Copyright © 2019 - ERP Σ. All Rights Reserved.</footer>
</html>
