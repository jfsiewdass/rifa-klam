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
    <title>Lottovibe - Lottery & Giveaway HTML Template</title>
    <!-- ==== #Favicon ==== -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">


    <!-- ==== Tabler Icon ==== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">
    <!-- ==== #style.min ==== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="winbg">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Laravel 11 User Roles and Permissions Tutorial - ItSolutionStuff.com
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                        <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                        <li><a class="nav-link" href="{{ route('rifas.index') }}">Manage Rifas</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
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
                <a href="index.html" class="pb-10 text-center d-block">
                    <img src="assets/images/logo/logo-black.png" alt="img">
                </a>
                
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
