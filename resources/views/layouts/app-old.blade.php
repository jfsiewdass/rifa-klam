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
    <link rel="stylesheet" href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/css/bootstrap.min.css') }}">
    {{-- @vite(['resources/sass/app.scss', 
            'resources/js/app.js',
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
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ==== Login ==== -->


    </main>



    <!-- ==== js Jquery start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/jquery.js') }}"></script>
    <!-- ==== js Viewport js start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/viewpot.js') }}"></script>
    <!-- ==== js Aos Animation start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/aos.js') }}"></script>
    <!-- ==== js Bootstrap start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/bootstrap.js') }}"></script>
    <!-- ==== js Magnific start ==== -->
    {{-- <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/magnific-popup.js"></') }}script> --}}
    <!-- ==== js Swiper start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/swiper.js') }}"></script>
    <!-- ==== js Odometer start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/odometer.js') }}"></script>
    <!-- ==== js Nice Select start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <!-- ==== js Phosphor Icon start ==== -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- ==== js Mian start ==== -->
    <script src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>

{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.admin.head')
<body>
    <div id="app">
        @include('layouts.admin.nav')

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
    
</body>

</html> --}}
