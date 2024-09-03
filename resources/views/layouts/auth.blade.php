<!doctype html>
<html lang="en">

<head>

    <!-- ==== Required Meta ==== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ==== #Keywords ==== -->
    <meta name="keywords" content="boot, Bootstrap, LottoVibe - Multipurpose HTML Template">
    <!-- ==== #Description ==== -->
    <meta name="description" content="LottoVibe - Multipurpose HTML Template">
    <!-- ==== #Title ==== -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- ==== #Favicon ==== -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">


    <!-- ==== Tabler Icon ==== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">
    <!-- ==== #style.min ==== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- @vite(['resources/sass/app.scss', 
        'resources/js/app.js', 
        'public/assets/js/plugins/jquery.js',
        'public/assets/js/plugins/bootstrap.js'
    ]) --}}
</head>

<body class="winbg">
    @include('layouts.admin.nav')
    
    <!-- ==== Custom Cursor Pointer ==== -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- ==== Custom Cursor Pointer ==== -->


    
    <!-- ==== Main ==== -->
    <main class="overflow-hidden">


    <!-- ==== Login ==== -->
    <section class="login-sectionv py-15 position-relative overflow-hidden w-100 h-100">
        <div class="cmn-scroll-wrapper d-center">
            <div class="cmn-scroll">
                {{-- <a href="index.html" class="pb-10 text-center d-block">
                    <img src="assets/images/logo/logo-black.png" alt="img">
                </a> --}}
                
                    @yield('content')
            </div>
        </div>
    </section>
    <!-- ==== Login ==== -->


    </main>



    <!-- ==== js Jquery start ==== -->
    <script src="assets/js/plugins/jquery.js"></script>
    <!-- ==== js Viewport js start ==== -->
    <script src="assets/js/plugins/viewpot.js"></script>
    <!-- ==== js Aos Animation start ==== -->
    <script src="assets/js/plugins/aos.js"></script>
    <!-- ==== js Bootstrap start ==== -->
    <script src="assets/js/plugins/bootstrap.js"></script>
    <!-- ==== js Magnific start ==== -->
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <!-- ==== js Swiper start ==== -->
    <script src="assets/js/plugins/swiper.js"></script>
    <!-- ==== js Odometer start ==== -->
    <script src="assets/js/plugins/odometer.js"></script>
    <!-- ==== js Nice Select start ==== -->
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <!-- ==== js Phosphor Icon start ==== -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- ==== js Mian start ==== -->
    <script src="assets/js/main.js"></script>
    @yield('scripts')
</body>

</html>
