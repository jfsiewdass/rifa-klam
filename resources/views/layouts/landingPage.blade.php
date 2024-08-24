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
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Global Line Animation -->
    <div class="global-line-animation d-flex align-items-center justify-content-between">
        <span class="act4-clr fs-two"></span>
        <span class="act4-clr fs-two"></span>
        <span class="act4-clr fs-two"></span>
        <span class="act4-clr fs-two"></span>
        <span class="act4-clr fs-two"></span>
        <span class="act4-clr fs-two"></span>
    </div>
    <!-- Global Line Animation -->
    
    <!-- ==== Custom Cursor Pointer ==== -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- ==== Custom Cursor Pointer ==== -->

    <!-- ==== Custom Mobile & Other Device Menu ==== -->
    @include('layouts.landing.nav')
    <!-- ==== Custom Mobile & Other Device Menu ==== -->
    
    <!-- ==== Main ==== -->
    <main class="overflow-hidden">

    <!-- ==== Banner Section ==== -->
    <div  class="banner-section-v1 pt-70-fixed n4-bg position-relative overflow-hidden">
        <!--Banner Content -->
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <div class="banner-content-v1">
                        <div class="d-flex mb-sm-3 mb-5 align-items-center gap-xxl-8 gap-lg-6 gap-4 flex-wrap">
                            <ul class="entry-win d-flex align-items-center gap-3">
                                <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1000">
                                    <a href="javascript:void(0)" class="fs-four p1-clr">
                                        Entra
                                    </a>
                                </li>
                                <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1200">
                                    <i class="ti ti-arrow-right fs-four p1-clr"></i>
                                </li>
                                <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1400">
                                    <a href="javascript:void(0)" class="fs-four p1-clr">
                                        Compra
                                    </a>
                                </li>
                                <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="1600">
                                    <i class="ti ti-arrow-right fs-four p1-clr"></i>
                                </li>
                                <li class="entry-win-item" data-aos="fade-down-right" data-aos-duration="2000">
                                    <a href="javascript:void(0)" class="fs-four p1-clr">
                                        Gana
                                    </a>
                                </li>
                            </ul>
                            {{-- <a href="contest.html" class="custom-bigarrow">
                                <span class="icon">
                                    <svg width="137" height="16" viewBox="0 0 137 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M136.707 8.70712C137.098 8.31659 137.098 7.68343 136.707 7.29291L130.343 0.928944C129.953 0.538419 129.319 0.538419 128.929 0.928943C128.538 1.31947 128.538 1.95263 128.929 2.34316L134.586 8.00001L128.929 13.6569C128.538 14.0474 128.538 14.6806 128.929 15.0711C129.319 15.4616 129.953 15.4616 130.343 15.0711L136.707 8.70712ZM-8.74228e-08 9L136 9.00001L136 7.00001L8.74228e-08 7L-8.74228e-08 9Z" fill="white"/>
                                    </svg>
                                </span>                                    
                            </a> --}}
                        </div>
                        <div class="custom-display n0-clr mb-6" data-aos="zoom-in-up" data-aos-duration="1000">
                            Puedes ser tu el
                            <div class="d-xxl-flex d-grid align-items-center justify-content-between winner-span gap-xxl-5 gap-4 flex-xxl-nowrap flex-wrap">
                                <span class="wins nw1-clr d-flex align-items-center gap-6" data-aos="zoom-in-down" data-aos-duration="2000">
                                    proximo 
                                    <span class="wins p1-clr">
                                        ganador?
                                        <svg viewBox="0 0 355 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.92099 12.8063C56.8373 3.14121 205.75 -10.0362 354.071 14.5747" stroke="#AEFE3A"/>
                                        </svg>                                            
                                    </span>
                                </span>
                                {{-- <div class="thumb">
                                    <img src="assets/images/global/play-text.png" alt="img" class="radius100">
                                    <a href="https://www.youtube.com/watch?v=668nUCeBHyY" class="bn-vid popup-video">
                                        <i class="ti ti-player-play-filled n4-clr fs-six"></i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <p class="nw2-clr bn-pra mb-xxl-10 mb-sm-8 mb-6" data-aos="zoom-out-up" data-aos-duration="1000">
                            Now's your chance to win a car! Check out the prestige cars you can win in our car prize draws. Will you be our next lucky winner?
                        </p>
                        <div class="d-flex align-items-center gap-xl-8 gap-3 flex-wrap mb-xxl-20 pb-xl-20 pb-5">
                            <a href="contest.html" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
                                <span class="kew-text s1-bg n4-clr act3-bg">
                                    Participa ahora
                                </span>
                                <div class="kew-arrow act3-bg">
                                    <div class="kt-one">
                                        <i class="ti ti-arrow-right n4-clr"></i>                                
                                    </div>
                                    <div class="kt-two">
                                        <i class="ti ti-arrow-right n4-clr"></i>                               
                                    </div>
                                </div>
                            </a>
                            <a href="howtoplay.html" class="how-cont nw1-clr fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                como funciona
                            </a>
                        </div>
                        <div class="bn1-odometer d-flex align-items-center gap-xxl-11 gap-xl-8 gap-lg-6 gap-5">
                            <div class="odometer__items" data-aos="zoom-in-down" data-aos-duration="1000">
                                {{-- <div class="cont d-flex align-items-center">
                                    <span class="odometer display-four nw1-clr fw_800">
                                    1750
                                    </span>
                                    <span class="plus__icon display-four nw1-clr fw_800">
                                    +
                                    </span>
                                </div>
                                <p>Verified Users</p> --}}
                            </div>
                            <div class="odometer__items" data-aos="zoom-in-up" data-aos-duration="1000">
                                {{-- <div class="cont d-flex align-items-center">
                                    <span class="odometer display-four nw1-clr fw_800">
                                        15
                                    </span>
                                </div>
                                <p>Years on the market</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--Banner Content -->
        {{-- <img src="assets/images/banner/win.png" alt="img" class="shape-win"> --}}
        <div class="banner-oneslider">
            <div class="banner-carslide-wrap swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bn-carslide-item">
                            <img src="assets/images/banner/banner-thumb-car1.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bn-carslide-item">
                            <img src="assets/images/bike/bliss-bike.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bn-carslide-item">
                            <img src="assets/images/bike/banner-cycle.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Slide Click Button -->
        <div class="slider-btn d-grid gap-xxl-5 gap-3">
            <button type="button"  class="swiper-button-prevteam cmn-60 p1-border p1-clr radius-circle">
                <i class="ph-light ph-caret-right"></i>
            </button>
            <button type="button" class="swiper-button-nextteam cmn-60 p1-border p1-clr radius-circle">
                <i class="ph-light ph-caret-left"></i>
            </button>
        </div>
        <!--Slide Click Button -->

        <!--Scroll Top -->
        <a href="#down-scroll" class="scroll-bn1 act3-bg radius100 d-flex justify-content-center align-items-center justify-content-center">
            <span class="d-grid gap-xxl-5 gap-xl-4 gap-3 justify-content-center text-center m-auto">
                <span class="n4-clr fs18 d-block fw_600">
                    Scroll 
                </span>
                <span class="scroll-iconrarea">
                    <svg width="16" height="65" viewBox="0 0 16 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.29289 64.7071C7.68341 65.0976 8.31658 65.0976 8.7071 64.7071L15.0711 58.3431C15.4616 57.9526 15.4616 57.3195 15.0711 56.9289C14.6805 56.5384 14.0474 56.5384 13.6569 56.9289L8 62.5858L2.34314 56.9289C1.95262 56.5384 1.31945 56.5384 0.92893 56.9289C0.538405 57.3195 0.538405 57.9526 0.92893 58.3431L7.29289 64.7071ZM7 -4.37121e-08L7 64L9 64L9 4.37121e-08L7 -4.37121e-08Z" fill="black"/>
                    </svg>
                </span>
            </span>
        </a>
        <!--Scroll Top -->
    </div>
    <!-- ==== Banner Section ==== -->

    <!-- ==== Lottery Service ==== -->
    {{-- <section  class="lottery-service pt-120 pb-120" id="down-scroll">
        <!--Section Header-->
        <div class="container">
            <div class="row g-xl-4 g-3 justify-content-between mb-xxl-15 mb-xl-10 mb-8">
                <div class="col-lg-6">
                    <div class="section__title">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                            <img src="assets/images/global/section-icon.png" alt="img">
                            <h5 class="s1-clr fw_700">
                                Why Participant Our Program
                            </h5>
                        </div>
                        <span class="display-four d-block n4-clr">
                            Explore <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">Our Exclusive </span>
                            <span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
                                Lottery
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="section__title-sub">
                        <p class="n3-clr fs20 mb-xxl-8 mb-xl-6 mb-4" data-aos="fade-up-right" data-aos-duration="1000">
                            Experience the ease of participating in our car lotteries. Our user-friendly platform ensures a seamless ticketing process,
                        </p>
                        <a href="contact.html" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                            <span class="kew-text p1-bg n4-clr" data-aos="zoom-in-left" data-aos-duration="900">
                                Explore Now
                            </span>
                            <div class="kew-arrow p1-bg" data-aos="zoom-in-left" data-aos-duration="1600">
                                <div class="kt-one">
                                    <i class="ti ti-arrow-right n4-clr"></i>                                
                                </div>
                                <div class="kt-two p1-bg">
                                    <i class="ti ti-arrow-right n4-clr"></i>                               
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Section Header-->
        
        <!--Lottery Service Body-->
        <div class="lotto-services-container">
            <div class="container-fluid">
                <div class="lottery-service-wrap swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="contest-details.html" class="lotter-service-item d-block position-relative overflow-hidden">
                                <img src="assets/images/service/lcar.png" alt="img" class="lotto-img">
                                <span class="lottory-sercar tl__posi">
                                    <span class="lbadge p1-bg mb-xxl-4 mb-xl-5 mb-5">
                                        <i class="ph-light ph-car-profile fs-three"></i>
                                    </span>
                                    <span class="n4-clr">
                                        <span class="fs-four">
                                            Dream Products Lineup
                                        </span>
                                    </span>
                                </span>
                                <span class="serial-badge fs-five radius-circle d-flex align-items-center justify-content-center act3-bg">
                                    01
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="contest-details.html" class="lotter-service-item d-block position-relative overflow-hidden">
                                <img src="assets/images/service/llottory.png" alt="img" class="lotto-img">
                                <span class="lottory-sercar tl__posi">
                                    <span class="lbadge p1-bg mb-xxl-4 mb-xl-5 mb-5">
                                        <i class="ph-light ph-ticket fs-three"></i>
                                    </span>
                                    <span class="n4-clr">
                                    <span class="fs-four">
                                        Transparent Draw Process
                                    </span>
                                    </span>
                                </span>
                                <span class="serial-badge fs-five radius-circle d-flex align-items-center justify-content-center act3-bg">
                                    02
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="contest-details.html" class="lotter-service-item d-block position-relative overflow-hidden">
                                <img src="assets/images/service/lticket.png" alt="img" class="lotto-img">
                                <span class="lottory-sercar tl__posi">
                                    <span class="lbadge p1-bg mb-xxl-4 mb-xl-5 mb-5">
                                        <i class="ph-light ph-shield-plus fs-three"></i>
                                    </span>
                                    <span class="n4-clr">
                                        <span class="fs-four">
                                            Secure Ticket Purchasing
                                        </span>
                                    </span>
                                </span>
                                <span class="serial-badge fs-five radius-circle d-flex align-items-center justify-content-center act3-bg">
                                    03
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="contest-details.html" class="lotter-service-item d-block position-relative overflow-hidden">
                                <img src="assets/images/service/lmobile.png" alt="img" class="lotto-img">
                                <span class="lottory-sercar tl__posi">
                                    <span class="lbadge p1-bg mb-xxl-4 mb-xl-5 mb-5">
                                        <i class="ph ph-calendar-blank fs-three"></i>
                                    </span>
                                    <span class="n4-clr">
                                        <span class="fs-four">
                                            Real-Time Jackpot Updates
                                        </span>
                                    </span>
                                </span>
                                <span class="serial-badge fs-five radius-circle d-flex align-items-center justify-content-center act3-bg">
                                    04
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="contest-details.html" class="lotter-service-item d-block position-relative overflow-hidden">
                                <img src="assets/images/service/ltab.png" alt="img" class="lotto-img">
                                <span class="lottory-sercar tl__posi">
                                    <span class="lbadge p1-bg mb-xxl-4 mb-xl-5 mb-5">
                                        <i class="ph ph-layout fs-three"></i>
                                    </span>
                                    <span class="n4-clr">
                                    <span class="fs-four">
                                        User-Friendly Dashboard
                                    </span>
                                    </span>
                                </span>
                                <span class="serial-badge fs-five radius-circle d-flex align-items-center justify-content-center act3-bg">
                                    05
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-xxl-15 mt-xl-8 mt-6 d-flex align-items-center gap-xxl-6 gap-xl-5 gap-3">
                    <div class="slider-btn d-inline-flex gap-xxl-5 gap-3">
                        <button type="button" class="swiper-button-nextteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                            <i class="ph-light ph-caret-left act4-clr"></i>
                        </button>
                        <button type="button"  class="swiper-button-prevteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                            <i class="ph-light ph-caret-right act4-clr"></i>
                        </button>
                    </div>
                    <div class="swiper-pagination d-center"></div>
                </div>
            </div>
        </div>
        <!--Lottery Service Body-->
    </section> --}}
    <!-- ==== Lottery Service ==== -->

    <!-- ==== Highlight service ==== -->
    {{-- <section class="highlight-service n2-bg pt-120 pb-120">
        <!--Section Header-->
        <div class="container">
            <div class="row g-xl-4 g-3 align-items-center justify-content-sm-between justify-content-center mb-xxl-15 mb-xl-10 mb-8">
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <div class="section__title text-sm-start text-center">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap justify-content-sm-start justify-content-center align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                            <img src="assets/images/global/global-picon.png" alt="img">
                            <h5 class="p1-clr fw_700">
                                All Category
                            </h5>
                        </div>
                        <span class="display-four d-block n0-clr">
                            <span class="d-block">
                                Browse The
                            </span>
                             <span class="act4-clr act4-underline d-inline-block" data-aos="zoom-in-left" data-aos-duration="1000">Highlights </span>
                        </span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <a href="contest.html" class="cmn__collection radius-circle p1-bg d-center position-relative ms-lg-auto m-sm-0 m-auto">
                        <span class="cmn-cont-box text-center position-relative">
                            <span class="icon mb-1">
                                <i class="ph-bold ph-arrow-up-right n4-clr fs-three"></i>
                            </span>
                            <span class="d-block n4-clr fw_700">
                                Browse More
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!--Section Header-->
        
        
        <!--hilight body-->
        <div class="container custom-highcontainer">
            <div class="row g-6 justify-content-between">
                <div class="high-service-wrap position-relative">
                    <div class="thumb-high">
                        <img src="assets/images/blog/guid-thumb.png" alt="img">
                    </div>
                    <ul class="nav high-contentwrap d-grid nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link nw1-clr display-four fw_700" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                Car
                                <div class="tab-content" >
                                    <div class="tab-pane show fade active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <span class="cmn-high-thumb">
                                            <img src="assets/images/service/h-cars.png" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link nw1-clr display-four fw_700" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                Bike
                                <div class="tab-content" >
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <span class="cmn-high-thumb">
                                            <img src="assets/images/service/h-bike.png" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link nw1-clr display-four fw_700" id="contact-tab2" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-controls="contact2" aria-selected="false">
                                Cycle
                                <div class="tab-content" >
                                    <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                                        <span class="cmn-high-thumb">
                                            <img src="assets/images/service/h-cycle.png" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link nw1-clr display-four fw_700" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact3" type="button" role="tab" aria-controls="contact3" aria-selected="false">
                                Jewelry
                                <div class="tab-content" >
                                    <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                                        <span class="cmn-high-thumb">
                                            <img src="assets/images/service/h-ring.png" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link nw1-clr display-four fw_700" id="contact-tab4" data-bs-toggle="tab" data-bs-target="#contact4" type="button" role="tab" aria-controls="contact4" aria-selected="false">
                                Electronic
                                <div class="tab-content" >
                                    <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                        <span class="cmn-high-thumb">
                                            <img src="assets/images/service/h-aipot.png" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link nw1-clr display-four fw_700" id="contact-tab5" data-bs-toggle="tab" data-bs-target="#contact5" type="button" role="tab" aria-controls="contact5" aria-selected="false">
                                Real Estate
                                <div class="tab-content" >
                                    <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                                        <span class="cmn-high-thumb">
                                            <img src="assets/images/service/h-house.png" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--hilight body-->
    </section> --}}
    <!-- ==== Highlight service ==== -->

    <!-- ==== Win Lottery section ==== -->
    <section  class="current-lottery pt-120 pb-120" id="down-scroll">
        <div class="container" >
            <!--Section Header-->
            <div class="row g-xl-4 g-3 align-items-center justify-content-between mb-xxl-15 mb-xl-10 mb-8">
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <div class="section__title">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                            <img src="assets/images/global/section-icon.png" alt="img">
                            <h5 class="s1-clr fw_700">
                                Try your chance at winning
                            </h5>
                        </div>
                        <span class="display-four d-block n4-clr">
                            Current <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">Lottery </span>
                            <span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
                                Offering
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <a href="contest.html" class="cmn__collection radius-circle s1-bg d-center position-relative ms-lg-auto">
                        <span class="cmn-cont-box text-center position-relative">
                            <span class="icon mb-1">
                                <i class="ph-bold ph-arrow-up-right n0-clr fs-three"></i>
                            </span>
                            <span class="d-block n0-clr fw_700">
                                Browse More
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <!--Section Header-->

            <div class="singletab">
                <div class="question-tab main-lottery-tab mb-xxl-15 mb-xl-10 mb-lg-8 mb-7">
                    <ul class="tablinks">
                        <li class="nav-links active">
                            <button class="tablink">
                                Car 
                            </button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink">
                                Bike
                            </button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink">
                                Cycle
                            </button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink">
                                Jewelry
                            </button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink">
                                Electronic
                            </button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink">
                                Real Estate
                            </button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink">
                                NFT
                            </button>
                        </li>
                        <li class="nav-links">
                            <button class="tablink">
                                Clothing
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tabcontents">
                    <div class="tabitem active">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/lottery/lc1.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                27% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        The Breeze Zodiac IX
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    03 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1750 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$8.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/lottery/lc2.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                23% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Chiptuning Von ABT
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1950
                                                     Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$5.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/lottery/lc3.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                20% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Shelby Cobra
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1200 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$3.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/bike/b1.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                27% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Ninja H2r
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    03 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1750 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$8.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/bike/b2.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                YZF-R15
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Chiptuning Von ABT
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1950
                                                     Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$5.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/bike/b4.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                20% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Hero MotoCorp
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1200 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$3.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem cycle-custom">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/bike/bb-1.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                27% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Cyclone Cruise
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    03 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1750 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$8.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/bike/bb-2.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                Swift Cyclist
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Chiptuning Von ABT
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1950
                                                     Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$5.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/bike/bb-3.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                20% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Apex Aeronaut
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1200 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$3.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem cycle-custom">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb text-center cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/luxury/w8.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                27% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Gold Diamond Ring
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    03 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1750 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$8.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb text-center cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/luxury/w6.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                27% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Diamond Gold
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1950
                                                     Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$5.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb text-center cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/luxury/w4.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                20% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Engagement ring
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1200 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$3.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb text-center cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/luxury/gs2.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                27% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Meta Quest 2
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    03 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1750 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$8.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb text-center cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/luxury/gs5.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                27% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        Smart Watch
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1950
                                                     Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$5.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                Draw Today
                                            </span>
                                        </span>
                                        <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span>
                                    </div>
                                    <div class="thumb text-center cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        <img src="assets/images/luxury/gs3.png" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                20% Sold
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                           <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        MacBook Air M2
                                                    </a>
                                                </h4>
                                                <div class="d-flex align-items-center gap-xl-3 gap-2">
                                                    <ul class="ratting d-flex align-items-center gap-1">
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                        </li>
                                                        <li>
                                                            <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="n3-clr fw_600">
                                                        0.97 reviews
                                                    </span>
                                                </div>
                                           </div>
                                           <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple act4-clr"></i>
                                           </span>
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1200 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">$3.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="contest-details.html" class="cmn-40 radius-circle s1-bg s1-hover">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-itemv9 cmn-cartborder position-relative radius24 n0-bg">
                                    <div class="thumb cus-z1 position-relative">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                            <span class="draw-badge n0-clr">
                                                <span class="n0-clr position-relative fw_700 fs-eight">
                                                    Draw Today
                                                </span>
                                            </span>
                                            <a href="basket.html" class="cmn-40 n0-bg radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <div class="thumb-in w-100">
                                            <img src="assets/images/testimonial/real-estate2.png" alt="img" class="w-100">
                                        </div>
                                    </div>
                                    <div class="content-middle">
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-6 pt-4 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1050 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-5 pt-sm-4 pt-4 pb-xxl-3 pb-sm-3 pb-2 flex-wrap gap-3 align-items-center justify-content-between">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700">
                                                    Riverbend Retreat
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 align-items-center justify-content-between pb-xxl-6 pb-4">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr fw_700">$3.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="#0" class="cmn-40 radius-circle n4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple fs-five n4-clr"></i>
                                           </a>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-grid align-items-center gap-2 py-xxl-6 py-4">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                27% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-xl-1 gap-1 mt-3">
                                                <ul class="ratting d-flex align-items-center gap-1">
                                                    <li>
                                                        <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                    </li>
                                                </ul>
                                                <span class="n3-clr fw_600 d-flex align-items-center gap-1">
                                                    <span class="n4-clr fw_600 fs20">
                                                        4.5
                                                    </span>
                                                    (195 reviews)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="current-lottery-itemv9 cmn-cartborder position-relative radius24 n0-bg">
                                    <div class="thumb cus-z1 position-relative">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                            <span class="draw-badge n0-clr">
                                                <span class="n0-clr position-relative fw_700 fs-eight">
                                                    Draw Today
                                                </span>
                                            </span>
                                            <a href="basket.html" class="cmn-40 n0-bg radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <div class="thumb-in w-100">
                                            <img src="assets/images/testimonial/real-estate3.png" alt="img" class="w-100">
                                        </div>
                                    </div>
                                    <div class="content-middle">
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-6 pt-4 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    03 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1750 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-5 pt-sm-4 pt-4 pb-xxl-3 pb-sm-3 pb-2 flex-wrap gap-3 align-items-center justify-content-between">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700">
                                                    Herringbone Realty
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 align-items-center justify-content-between pb-xxl-6 pb-4">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr fw_700">$1.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="#0" class="cmn-40 radius-circle n4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple fs-five n4-clr"></i>
                                           </a>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-grid align-items-center gap-2 py-xxl-6 py-4">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                45% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-xl-1 gap-1 mt-3">
                                                <ul class="ratting d-flex align-items-center gap-1">
                                                    <li>
                                                        <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                    </li>
                                                </ul>
                                                <span class="n3-clr fw_600 d-flex align-items-center gap-1">
                                                    <span class="n4-clr fw_600 fs20">
                                                        4.9
                                                    </span>
                                                    (175 reviews)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-itemv9 cmn-cartborder position-relative radius24 n0-bg">
                                    <div class="thumb cus-z1 position-relative">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                            <span class="draw-badge n0-clr">
                                                <span class="n0-clr position-relative fw_700 fs-eight">
                                                    Draw Today
                                                </span>
                                            </span>
                                            <a href="basket.html" class="cmn-40 n0-bg radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <div class="thumb-in w-100">
                                            <img src="assets/images/testimonial/real-estate4.png" alt="img" class="w-100">
                                        </div>
                                    </div>
                                    <div class="content-middle">
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-6 pt-4 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1950 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-5 pt-sm-4 pt-4 pb-xxl-3 pb-sm-3 pb-2 flex-wrap gap-3 align-items-center justify-content-between">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700">
                                                    Oakwood Cottage
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 align-items-center justify-content-between pb-xxl-6 pb-4">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr fw_700">$2.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="#0" class="cmn-40 radius-circle n4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple fs-five n4-clr"></i>
                                           </a>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-grid align-items-center gap-2 py-xxl-6 py-4">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                25% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-xl-1 gap-1 mt-3">
                                                <ul class="ratting d-flex align-items-center gap-1">
                                                    <li>
                                                        <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                    </li>
                                                </ul>
                                                <span class="n3-clr fw_600 d-flex align-items-center gap-1">
                                                    <span class="n4-clr fw_600 fs20">
                                                        4.2
                                                    </span>
                                                    (115 reviews)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-itemv13 current-lottery-v13before nw3-border position-relative radius24 n0-bg p-xxl-6 p-xl-4 p-3">
                                    <div class="thumb cus-z1 position-relative radius24 overflow-hidden">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pe-xxl-5 pe-4">
                                            <span class="cmn-draw-badge d-inline-blog act3-bg py-2 ps-xxl-5 ps-3 pe-8">
                                                <span class="n4-clr position-relative fw_700 fs-eight">
                                                    Draw Wednesday 8pm
                                                </span>
                                            </span>
                                        </div>
                                        <div class="cart-added d-grid align-items-center gap-xxl-3 gap-2">
                                            <a href="#" class="cmn-60 act3-bg d-center radius-circle n0-hover">
                                                <i class="ph-bold ph-bookmark-simple n4-clr fs-five"></i>
                                            </a>
                                            <a href="basket.html" class="cmn-60 act3-bg d-center radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <img src="assets/images/man-global/nf1.png" alt="img" class="w-100">
                                    </div>
                                    <div class="content-middle pt-xxl-6 pt-sm-4 pt-4">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between pb-xxl-3 pb-sm-3 pb-2 gap-3">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700 act4-texthover">
                                                    Digital Dreamscapes
                                                </a>
                                            </h4>
                                            <a href="contest-details.html" class="kewta-btn kewta-44 d-inline-flex align-items-center">
                                                <div class="kew-arrow kew-rotate n4-bg">
                                                    <div class="kt-one">
                                                        <i class="ti ti-arrow-right n0-clr"></i>                                
                                                    </div>
                                                    <div class="kt-two">
                                                        <i class="ti ti-arrow-right n0-clr"></i>                               
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <h3 class="d-flex align-items-center gap-3 n4-clr mb-xxl-4 mb-3">
                                            <span class="pr fw_700">$1.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                        </h3>
                                        <div class="border-top"></div>
                                        <ul class="remaining-info py-xxl-3 py-3 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1050 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range mt-xxl-4 mt-3 d-grid align-items-center gap-2">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                35% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="current-lottery-itemv13 current-lottery-v13before nw3-border position-relative radius24 n0-bg p-xxl-6 p-xl-4 p-3">
                                    <div class="thumb cus-z1 position-relative radius24 overflow-hidden">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pe-xxl-5 pe-4">
                                            <span class="cmn-draw-badge d-inline-blog act3-bg py-2 ps-xxl-5 ps-3 pe-8">
                                                <span class="n4-clr position-relative fw_700 fs-eight">
                                                    Draw Wednesday 8pm
                                                </span>
                                            </span>
                                        </div>
                                        <div class="cart-added d-grid align-items-center gap-xxl-3 gap-2">
                                            <a href="#" class="cmn-60 act3-bg d-center radius-circle n0-hover">
                                                <i class="ph-bold ph-bookmark-simple n4-clr fs-five"></i>
                                            </a>
                                            <a href="basket.html" class="cmn-60 act3-bg d-center radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <img src="assets/images/man-global/nf2.png" alt="img" class="w-100">
                                    </div>
                                    <div class="content-middle pt-xxl-6 pt-sm-4 pt-4">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between pb-xxl-3 pb-sm-3 pb-2 gap-3">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700 act4-texthover">
                                                    Dreamy Imaginations
                                                </a>
                                            </h4>
                                            <a href="contest-details.html" class="kewta-btn kewta-44 d-inline-flex align-items-center">
                                                <div class="kew-arrow kew-rotate n4-bg">
                                                    <div class="kt-one">
                                                        <i class="ti ti-arrow-right n0-clr"></i>                                
                                                    </div>
                                                    <div class="kt-two">
                                                        <i class="ti ti-arrow-right n0-clr"></i>                               
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <h3 class="d-flex align-items-center gap-3 n4-clr mb-xxl-4 mb-3">
                                            <span class="pr fw_700">$0.70</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                        </h3>
                                        <div class="border-top"></div>
                                        <ul class="remaining-info py-xxl-3 py-3 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1990 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range mt-xxl-4 mt-3 d-grid align-items-center gap-2">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                25% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-itemv13 current-lottery-v13before nw3-border position-relative radius24 n0-bg p-xxl-6 p-xl-4 p-3">
                                    <div class="thumb cus-z1 position-relative radius24 overflow-hidden">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pe-xxl-5 pe-4">
                                            <span class="cmn-draw-badge d-inline-blog act3-bg py-2 ps-xxl-5 ps-3 pe-8">
                                                <span class="n4-clr position-relative fw_700 fs-eight">
                                                    Draw Wednesday 8pm
                                                </span>
                                            </span>
                                        </div>
                                        <div class="cart-added d-grid align-items-center gap-xxl-3 gap-2">
                                            <a href="#" class="cmn-60 act3-bg d-center radius-circle n0-hover">
                                                <i class="ph-bold ph-bookmark-simple n4-clr fs-five"></i>
                                            </a>
                                            <a href="basket.html" class="cmn-60 act3-bg d-center radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <img src="assets/images/man-global/nf3.png" alt="img" class="w-100">
                                    </div>
                                    <div class="content-middle pt-xxl-6 pt-sm-4 pt-4">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between pb-xxl-3 pb-sm-3 pb-2 gap-3">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700 act4-texthover">
                                                    Futuristic Realism
                                                </a>
                                            </h4>
                                            <a href="contest-details.html" class="kewta-btn kewta-44 d-inline-flex align-items-center">
                                                <div class="kew-arrow kew-rotate n4-bg">
                                                    <div class="kt-one">
                                                        <i class="ti ti-arrow-right n0-clr"></i>                                
                                                    </div>
                                                    <div class="kt-two">
                                                        <i class="ti ti-arrow-right n0-clr"></i>                               
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <h3 class="d-flex align-items-center gap-3 n4-clr mb-xxl-4 mb-3">
                                            <span class="pr fw_700">$0.50</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                        </h3>
                                        <div class="border-top"></div>
                                        <ul class="remaining-info py-xxl-3 py-3 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1670 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range mt-xxl-4 mt-3 d-grid align-items-center gap-2">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                60% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="row g-6">
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-itemv9 cmn-cartborder position-relative radius24 n0-bg">
                                    <div class="thumb cus-z1 position-relative">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                            <span class="draw-badge n0-clr">
                                                <span class="n0-clr position-relative fw_700 fs-eight">
                                                    Draw Today
                                                </span>
                                            </span>
                                            <a href="basket.html" class="cmn-40 n0-bg radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <div class="thumb-in w-100">
                                            <img src="assets/images/service/jins.png" alt="img" class="w-100">
                                        </div>
                                    </div>
                                    <div class="content-middle">
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-6 pt-4 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    02 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1050 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-5 pt-sm-4 pt-4 pb-xxl-3 pb-sm-3 pb-2 flex-wrap gap-3 align-items-center justify-content-between">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700 act4-texthover">
                                                    Jeans pant
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 align-items-center justify-content-between pb-xxl-6 pb-4">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr fw_700">$3.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="#0" class="cmn-40 radius-circle n4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple fs-five n4-clr"></i>
                                           </a>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-grid align-items-center gap-2 py-xxl-6 py-4">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                27% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-xl-1 gap-1 mt-3">
                                                <ul class="ratting d-flex align-items-center gap-1">
                                                    <li>
                                                        <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                    </li>
                                                </ul>
                                                <span class="n3-clr fw_600 d-flex align-items-center gap-1">
                                                    <span class="n4-clr fw_600 fs20">
                                                        4.5
                                                    </span>
                                                    (195 reviews)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="current-lottery-itemv9 cmn-cartborder position-relative radius24 n0-bg">
                                    <div class="thumb cus-z1 position-relative">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                            <span class="draw-badge n0-clr">
                                                <span class="n0-clr position-relative fw_700 fs-eight">
                                                    Draw Today
                                                </span>
                                            </span>
                                            <a href="basket.html" class="cmn-40 n0-bg radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <div class="thumb-in w-100">
                                            <img src="assets/images/service/t-shart.png" alt="img" class="w-100">
                                        </div>
                                    </div>
                                    <div class="content-middle">
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-6 pt-4 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    03 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1750 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-5 pt-sm-4 pt-4 pb-xxl-3 pb-sm-3 pb-2 flex-wrap gap-3 align-items-center justify-content-between">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700 act4-texthover">
                                                    Printed T-shirt
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 align-items-center justify-content-between pb-xxl-6 pb-4">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr fw_700">$1.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="#0" class="cmn-40 radius-circle n4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple fs-five n4-clr"></i>
                                           </a>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-grid align-items-center gap-2 py-xxl-6 py-4">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                45% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-xl-1 gap-1 mt-3">
                                                <ul class="ratting d-flex align-items-center gap-1">
                                                    <li>
                                                        <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                    </li>
                                                </ul>
                                                <span class="n3-clr fw_600 d-flex align-items-center gap-1">
                                                    <span class="n4-clr fw_600 fs20">
                                                        4.9
                                                    </span>
                                                    (175 reviews)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                                <div class="current-lottery-itemv9 cmn-cartborder position-relative radius24 n0-bg">
                                    <div class="thumb cus-z1 position-relative">
                                        <div class="current-l-badge cus-z1 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                            <span class="draw-badge n0-clr">
                                                <span class="n0-clr position-relative fw_700 fs-eight">
                                                    Draw Today
                                                </span>
                                            </span>
                                            <a href="basket.html" class="cmn-40 n0-bg radius-circle n0-hover">
                                                <i class="ph ph-bold ph-shopping-cart n4-clr fs-five"></i>
                                            </a>
                                        </div>
                                        <div class="thumb-in w-100">
                                            <img src="assets/images/service/coat.png" alt="img" class="w-100">
                                        </div>
                                    </div>
                                    <div class="content-middle">
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-6 pt-4 d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    05 Days
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-barbell fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    1950 Remaining
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 pt-xxl-5 pt-sm-4 pt-4 pb-xxl-3 pb-sm-3 pb-2 flex-wrap gap-3 align-items-center justify-content-between">
                                            <h4>
                                                <a href="contest-details.html" class="n4-clr fw_700 act4-texthover">
                                                    Trench-style coat
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 align-items-center justify-content-between pb-xxl-6 pb-4">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr fw_700">$2.00</span> <span class="fs-six text-uppercase">PER ENTRY</span>
                                            </h3>
                                            <a href="#0" class="cmn-40 radius-circle n4-border n0-fillhover">
                                                <i class="ph-bold ph-bookmark-simple fs-five n4-clr"></i>
                                           </a>
                                        </div>
                                        <div class="border-top"></div>
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-grid align-items-center gap-2 py-xxl-6 py-4">
                                            <span class="n4-clr soldout fw_700 fs-eight mb-1">
                                                25% Sold
                                            </span>
                                            <div class="range-custom position-relative">
                                                <span class="curs-range"></span>
                                            </div>
                                            <div class="d-flex align-items-center gap-xl-1 gap-1 mt-3">
                                                <ul class="ratting d-flex align-items-center gap-1">
                                                    <li>
                                                        <i class="ph-fill ph-star fs-five act4-clr"></i>
                                                    </li>
                                                </ul>
                                                <span class="n3-clr fw_600 d-flex align-items-center gap-1">
                                                    <span class="n4-clr fw_600 fs20">
                                                        4.2
                                                    </span>
                                                    (115 reviews)
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Win Lottery section ==== -->

    <!-- ==== About Counter Section ==== -->
    {{-- <div class="about-counter winbg pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row g-10 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1200">
                    <div class="about-winner-countitem">
                        <div class="icon d-center act3-border mb-xxl-8 mb-xl-6 mb-5">
                            <img src="assets/images/global/badge-a.png" alt="img">
                        </div>
                        <div class="cont text-center">
                            <span class="counters display-two mb-2 mb-xl-3 justify-content-center d-flex align-items-center  n1-clr">
                                <span class="odometer" data-odometer-final="27"></span>
                                <span class="act4-clr"> +</span>
                            </span>
                            <span class="fs20 fw_600 n1-clr">
                                Winners For Last Month
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1400">
                    <div class="about-winner-countitem">
                        <div class="icon d-center act3-border mb-xxl-8 mb-xl-6 mb-5">
                            <img src="assets/images/global/ticket-a.png" alt="img">
                        </div>
                        <div class="cont text-center">
                            <span class="counters display-two mb-2 mb-xl-3 justify-content-center d-flex align-items-center  n1-clr">
                                <span class="odometer" data-odometer-final="4575"></span>
                                <span class="act4-clr"> K</span>
                            </span>
                            <span class="fs20 fw_600 n1-clr">
                                Tickets Sold
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-right" data-aos-duration="1600">
                    <div class="about-winner-countitem">
                        <div class="icon d-center act3-border mb-xxl-8 mb-xl-6 mb-5">
                            <img src="assets/images/global/dollar-a.png" alt="img">
                        </div>
                        <div class="cont text-center">
                            <span class="counters display-two mb-2 mb-xl-3 justify-content-center d-flex align-items-center  n1-clr">
                                <span class="odometer" data-odometer-final="27"></span>
                                <span class="act4-clr"> K</span>
                            </span>
                            <span class="fs20 fw_600 n1-clr">
                                Payout to Winners
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ==== About Counter Section ==== -->

    <!-- ==== Unique Winner section ==== -->
    {{-- <section class="unique-winner pt-120 pb-120">
        <div class="container-fluid p-2">
            <div class="row g-xl-4 g-3 align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="section__title meet-main-title text-xl-start text-center mb-xl-0 mb-lg-12 mb-9">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center justify-content-xl-start justify-content-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                            <img src="assets/images/global/section-icon.png" alt="img">
                            <h5 class="s1-clr fw_700">
                                People In Illinois Are
                            </h5>
                        </div>
                        <span class="display-four d-block n4-clr mb-xxl-10 mb-xl-7 mb-sm-5 mb-4">
                            Meet Our <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">Previous </span>
                            <span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
                                Winners
                            </span>
                        </span>
                        <a href="contest-details.html" class="kewta-btn d-inline-flex align-items-center">
                            <span class="kew-text act3-bg n4-clr">
                                View All Winners
                            </span>
                            <div class="kew-arrow act3-bg n4-clr">
                                <div class="kt-one">
                                    <i class="ti ti-arrow-right n4-clr"></i>                                
                                </div>
                                <div class="kt-two">
                                    <i class="ti ti-arrow-right n4-clr"></i>                               
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="lottery-service-wrapnew swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="meet-previous-item" data-aos="zoom-in-down" data-aos-duration="1200">
                                    <div class="thumb-man">
                                        <img src="assets/images/man-global/t1.png" alt="img" class="mimg">
                                        <div class="man-bike">
                                            <img src="assets/images/bike/b4.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="meet-previous-item" data-aos="zoom-in-down" data-aos-duration="1200">
                                    <div class="thumb-man">
                                        <img src="assets/images/man-global/t2.png" alt="img" class="mimg">
                                        <div class="man-bike">
                                            <img src="assets/images/testimonial/tes3.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="meet-previous-item">
                                    <div class="thumb-man">
                                        <img src="assets/images/man-global/t6.png" alt="img" class="mimg">
                                        <div class="man-bike">
                                            <img src="assets/images/bike/bc6.png" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="mt-xxl-15 mt-xl-8 mt-6 d-flex align-items-center gap-xxl-6 gap-xl-5 gap-3">
                            <div class="slider-btn d-inline-flex gap-xxl-5 gap-3">
                                <button type="button" class="swiper-button-nextteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                                    <i class="ph-light ph-caret-left act4-clr"></i>
                                </button>
                                <button type="button"  class="swiper-button-prevteam cmn-s1-slide cmn-60 act4-border p1-clr radius-circle">
                                    <i class="ph-light ph-caret-right act4-clr"></i>
                                </button>
                            </div>
                            <div class="swiper-paginationnew d-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==== Unique Winner section ==== -->

    <!-- ==== Guid Winning section ==== -->
    {{-- <section class="guid-winning pb-120 pt-120 s1-bg position-relative">
        <!--Section Header-->
        <div class="container mb-xxl-15 mb-xl-12 mb-10 pb-xxl-15 pb-xl-12 pb-10 nw4-custom">
            <div class="row g-xl-4 g-3 align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <div class="section__title text-center">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center justify-content-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                            <img src="assets/images/global/global-picon.png" alt="img">
                            <h5 class="p1-clr fw_700">
                                How It Works
                            </h5>
                        </div>
                        <span class="display-four d-block nw1-clr mb-xxl-8 mb-4">
                            Your Ultimate 
                            <span class="d-flex align-items-center justify-content-center gap-3" data-aos="zoom-in-right" data-aos-duration="1200">
                                Guide to 
                                <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">Winning! </span>
                            </span>
                        </span>
                        <div class="d-flex flex-wrap flex-md-nowrap align-items-center justify-content-center gap-xl-8 gap-3 flex-wrap w-100">
                            <a href="contest.html" class="kewta-btn kewta-alt d-inline-flex align-items-center" data-aos="zoom-in-right" data-aos-duration="1000">
                                <span class="kew-text n4-clr act3-bg">
                                    Participant Now
                                </span>
                                <div class="kew-arrow act3-bg">
                                    <div class="kt-one">
                                        <i class="ti ti-arrow-right n4-clr"></i>                                
                                    </div>
                                    <div class="kt-two">
                                        <i class="ti ti-arrow-right n4-clr"></i>                               
                                    </div>
                                </div>
                            </a>
                            <a href="howtoplay.html" class="how-cont nw1-clr fw_700" data-aos="zoom-in-left" data-aos-duration="800">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Section Header-->

        <div class="container">
            <div class="row g-6 align-items-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="guid-thumb w-100 pe-lg-10 pe-sm-6 ps-sm-6 ps-3 pe-3 mt-lg-0 mt-6" data-aos="zoom-in-right" data-aos-duration="1400">
                        <img src="assets/images/blog/winning-digit.png" alt="img" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="program-content">
                        <div class="program-planwrap">
                            <div class="program-plan-item d-flex gap-xxl-10 gap-xl-7 gap-lg-5 gap-sm-4 gap-2">
                                <div class="pro-check d-center s1-bg nw1-border position-relative">
                                    <i class="ph-bold ph-check"></i>
                                </div>
                                <div class="program-plan-inner d-flex gap-xxl-6 gap-xl-5 gap-lg-3 gap-2" data-aos="zoom-in-down" data-aos-duration="1000">
                                    <div class="icon d-center p1-bg">
                                        <i class="ph ph-hand-pointing"></i>
                                    </div>
                                    <div class="content">
                                        <span class="fs-three mb-xxl-3 mb-2 fw_700 nw1-clr d-block">
                                            Choose Prize
                                        </span>
                                        <p class="nw2-clr">
                                            Choose your desired prize, pick tickets, answer correctly, then press 'enter now' for a chance to win!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="program-plan-item d-flex gap-xxl-10 gap-xl-7 gap-lg-5 gap-sm-4 gap-2">
                                <div class="pro-check d-center s1-bg nw1-border position-relative">
                                    <i class="ph-bold ph-check"></i>
                                </div>
                                <div class="program-plan-inner d-flex gap-xxl-6 gap-xl-5 gap-lg-3 gap-2" data-aos="zoom-in-down" data-aos-duration="1200">
                                    <div class="icon d-center p1-bg">
                                        <i class="ph ph-laptop"></i>
                                    </div>
                                    <div class="content">
                                        <span class="fs-three mb-xxl-3 mb-2 fw_700 nw1-clr d-block">
                                            Watch the Draw LIVE
                                        </span>
                                        <p class="nw2-clr">
                                            Join us live on Facebook for the draw and see if you're the lucky winner! Be ready for a potential call
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="program-plan-item d-flex gap-xxl-10 gap-xl-7 gap-lg-5 gap-sm-4 gap-2">
                                <div class="pro-check d-center s1-bg nw1-border position-relative">
                                    <i class="ph-bold ph-check"></i>
                                </div>
                                <div class="program-plan-inner d-flex gap-xxl-6 gap-xl-5 gap-lg-3 gap-2" data-aos="zoom-in-down" data-aos-duration="1400">
                                    <div class="icon d-center p1-bg">
                                        <i class="ph ph-ticket"></i>
                                    </div>
                                    <div class="content">
                                        <span class="fs-three mb-xxl-3 mb-2 fw_700 nw1-clr d-block">
                                            Get Your Prize
                                        </span>
                                        <p class="nw2-clr">
                                            Limited tickets ensure fixed odds. Competitions proceed, creating better chances. Join 7,000+ winners in anticipation
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="car-tybtn" data-aos="zoom-in-up" data-aos-duration="1600">
                            <a href="contact.html" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                                <span class="kew-text p1-bg n4-clr">
                                    All Featured
                                </span>
                                <div class="kew-arrow p1-bg">
                                    <div class="kt-one">
                                        <i class="ti ti-arrow-right n4-clr"></i>                                
                                    </div>
                                    <div class="kt-two">
                                        <i class="ti ti-arrow-right n4-clr"></i>                               
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="assets/images/global/lotto-b8.png" alt="img" class="lotto-b8">
    </section> --}}
    <!-- ==== Guid Winning section ==== -->

    <!-- ==== Testimonial section ==== -->
    {{-- <section  class="testimonial-mextra testimonial-v1-before pt-120 pb-120">
        <!--Section Header-->
        <div class="container">
            <div class="row g-xl-4 g-3 align-items-center justify-content-between mb-xxl-15 mb-xl-10 mb-8">
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="section__title">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                            <img src="assets/images/global/section-icon.png" alt="img">
                            <h5 class="s1-clr fw_700">
                                Trusted by these amazing companies
                            </h5>
                        </div>
                        <div class="display-four testimonial-heading d-block n4-clr">
                            Testimonials <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">People </span>
                            <div class="d-flex flex-wrap align-items-center g-4">
                                <ul class="customer-review testi-people-title cmn-style-flex">
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/banner/customer1.png" alt="img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/banner/customer2.png" alt="img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <img src="assets/images/banner/customer4.png" alt="img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="customer-revew-item n0-bg d-flex align-items-center justify-content-center">
                                            <span class="d-grid customer-ratting text-center p-2 p1-bg align-items-center justify-content-center">
                                                <span class="d-block fs-eight fw_700 n4-clr">
                                                    10k+
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <span class="d-block ar-talking" data-aos="zoom-in-right" data-aos-duration="1200">
                                    are talking
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="testimonial-ratting" data-aos="zoom-in-down" data-aos-duration="1600">
                        <span class="n4-clr fw_700 mb-xxl-6 mb-xl-4 mb-3">
                            Trustpilot
                        </span>
                        <ul class="ratting d-flex align-items-center gap-1 mb-xxl-3 mb-2">
                            <li>
                                <i class="ph-fill ph-star fs-five act4-clr"></i>
                            </li>
                            <li>
                                <i class="ph-fill ph-star fs-five act4-clr"></i>
                            </li>
                            <li>
                                <i class="ph-fill ph-star fs-five act4-clr"></i>
                            </li>
                            <li>
                                <i class="ph-fill ph-star fs-five act4-clr"></i>
                            </li>
                            <li>
                                <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                            </li>
                        </ul>
                        <h4 class="n2-clr">
                            4.5- <span class="fs-six fw_600">(25,750Reviews)</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!--Section Header-->

        <!--Testimonial wap-->
        <div class="swiper testimonial-wrap1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item1 pt-xxl-10 pt-xl-8 pt-lg-6 pt-4 nw4-border text-center">
                        <div class="box px-xxl-10 px-xl-8 px-lg-6 px-4">
                            <ul class="ratting d-flex justify-content-center align-items-center gap-1 mb-xxl-4 mb-3">
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                </li>
                            </ul>
                            <span class="fs20 fw_700 n4-clr d-block mb-xxl-6 mb-4">
                                "A Winning Journey"
                            </span>
                            <p class="fs18 pra">
                                From the moment I purchased my ticket to claiming my prize, journey. The transparency and excitement are unmatched. Highly recommend!"
                            </p>
                            <div class="cont mt-xxl-7 mt-xl-6 mt-5 mb-xxl-10 mb-xl-8 mb-lg-6 mb-5">
                                <div class="adrew">
                                    <img src="assets/images/testimonial/ts1.png" alt="img">
                                </div>
                                <span class="fs20 mb-1 fw_700 n4-clr d-block">
                                    Andrew Russel
                                </span>
                                <span class="fw_600 n2-clr">
                                    United States - March 23, 2024
                                </span>
                            </div>
                        </div>
                        <div class="testi-winthumb radius100">
                            <img src="assets/images/testimonial/tes1.png" alt="img" class="ttimg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item1 pt-xxl-10 pt-xl-8 pt-lg-6 pt-4 nw4-border text-center">
                        <div class="box px-xxl-10 px-xl-8 px-lg-6 px-4">
                            <ul class="ratting d-flex justify-content-center align-items-center gap-1 mb-xxl-4 mb-3">
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                </li>
                            </ul>
                            <span class="fs20 fw_700 n4-clr d-block mb-xxl-6 mb-4">
                                "A Winning Journey"
                            </span>
                            <p class="fs18 pra">
                                From the moment I purchased my ticket to claiming my prize, journey. The transparency and excitement are unmatched. Highly recommend!"
                            </p>
                            <div class="cont mt-xxl-7 mt-xl-6 mt-5 mb-xxl-10 mb-xl-8 mb-lg-6 mb-5">
                                <div class="adrew">
                                    <img src="assets/images/testimonial/ts1.png" alt="img">
                                </div>
                                <span class="fs20 mb-1 fw_700 n4-clr d-block">
                                    Andrew Russel
                                </span>
                                <span class="fw_600 n2-clr">
                                    United States - March 23, 2024
                                </span>
                            </div>
                        </div>
                        <div class="testi-winthumb radius100">
                            <img src="assets/images/luxury/w6.png" alt="img" class="ttimg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item1 pt-xxl-10 pt-xl-8 pt-lg-6 pt-4 nw4-border text-center">
                        <div class="box px-xxl-10 px-xl-8 px-lg-6 px-4">
                            <ul class="ratting d-flex justify-content-center align-items-center gap-1 mb-xxl-4 mb-3">
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                </li>
                            </ul>
                            <span class="fs20 fw_700 n4-clr d-block mb-xxl-6 mb-4">
                                "More Than Just Cars"
                            </span>
                            <p class="fs18 pra">
                                Winning a car in the lottery was a dream come true! The excitement of getting behind the wheel of my new car is beyond words. Thank you, Car Lottery,
                            </p>
                            <div class="cont mt-xxl-7 mt-xl-6 mt-5 mb-xxl-10 mb-xl-8 mb-lg-6 mb-5">
                                <div class="adrew">
                                    <img src="assets/images/testimonial/ts2.png" alt="img">
                                </div>
                                <span class="fs20 mb-1 fw_700 n4-clr d-block">
                                    Dianne Russell
                                </span>
                                <span class="fw_600 n2-clr">
                                    United States - July 29, 2024
                                </span>
                            </div>
                        </div>
                        <div class="testi-winthumb radius100">
                            <img src="assets/images/luxury/gs9.png" alt="img" class="ttimg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item1 pt-xxl-10 pt-xl-8 pt-lg-6 pt-4 nw4-border text-center">
                        <div class="box px-xxl-10 px-xl-8 px-lg-6 px-4">
                            <ul class="ratting d-flex justify-content-center align-items-center gap-1 mb-xxl-4 mb-3">
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                </li>
                            </ul>
                            <span class="fs20 fw_700 n4-clr d-block mb-xxl-6 mb-4">
                                "A Winning Journey"
                            </span>
                            <p class="fs18 pra">
                                Winning a car in the lottery was a dream come true! The excitement of getting behind the wheel of my new car is beyond words. Thank you, Car Lottery,
                            </p>
                            <div class="cont mt-xxl-7 mt-xl-6 mt-5 mb-xxl-10 mb-xl-8 mb-lg-6 mb-5">
                                <div class="adrew">
                                    <img src="assets/images/global/part1.png" alt="img">
                                </div>
                                <span class="fs20 mb-1 fw_700 n4-clr d-block">
                                    Alvarse Russell
                                </span>
                                <span class="fw_600 n2-clr">
                                    United States - July 29, 2024
                                </span>
                            </div>
                        </div>
                        <div class="testi-winthumb radius100">
                            <img src="assets/images/bike/bannerv6-c3.png" alt="img" class="ttimg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item1 pt-xxl-10 pt-xl-8 pt-lg-6 pt-4 nw4-border text-center">
                        <div class="box px-xxl-10 px-xl-8 px-lg-6 px-4">
                            <ul class="ratting d-flex justify-content-center align-items-center gap-1 mb-xxl-4 mb-3">
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star fs-five act4-clr"></i>
                                </li>
                                <li>
                                    <i class="ph-fill ph-star-half fs-five act4-clr"></i>
                                </li>
                            </ul>
                            <span class="fs20 fw_700 n4-clr d-block mb-xxl-6 mb-4">
                                "A Winning Journey"
                            </span>
                            <p class="fs18 pra">
                                Winning a car in the lottery was a dream come true! The excitement of getting behind the wheel of my new car is beyond words. Thank you, Car Lottery,
                            </p>
                            <div class="cont mt-xxl-7 mt-xl-6 mt-5 mb-xxl-10 mb-xl-8 mb-lg-6 mb-5">
                                <div class="adrew">
                                    <img src="assets/images/global/part2.png" alt="img">
                                </div>
                                <span class="fs20 mb-1 fw_700 n4-clr d-block">
                                    Alvarse Russell
                                </span>
                                <span class="fw_600 n2-clr">
                                    United States - July 29, 2024
                                </span>
                            </div>
                        </div>
                        <div class="testi-winthumb radius100">
                            <img src="assets/images/luxury/gs2.png" alt="img" class="ttimg">
                        </div>
                    </div>
                </div>
            </div>
           <div class="container">
                <div class="swiper-pagination-testi text-lg-start text-center mt-xxl-13 mt-xl-8 mt-lg-6 mt-4"></div>
           </div>
        </div>
        <!--Testimonial wap-->
    </section> --}}
    <!-- ==== Testimonial section ==== -->

    <!-- ==== Callto Action section ==== -->
    {{-- <section  class="call-tosection overflow-visible n4-bg pt-120 position-relative call-custom-space">
        <div class="container">
            <div class="call-to-wrapper1 pt-6">
                <div class="row g-xl-4 g-4 justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7">
                        <div class="section__title mb-xxl-15 mb-xl-10 mb-lg-8 mb-6">
                            <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                                <img src="assets/images/global/global-picon.png" alt="img">
                                <h5 class="p1-clr fw_700">
                                    Call To Action
                                </h5>
                            </div>
                            <span class="display-four d-block n0-clr">
                                Get Your Bike
                                <span class="d-flex align-items-center gap-2">
                                    <span class="d-block" data-aos="zoom-in-right" data-aos-duration="1200">
                                        Lottery
                                    </span>
                                    <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">
                                        Ticket Now!
                                    </span>
                                </span>
                            </span>
                        </div>
                        <div class="time-callwrap position-relative cus-z1">
                            <div class="this-box">
                                <span class="text-uppercase fs20 fw_700 n0-clr mb-xxl-10 mb-xl-7 mb-lg-6 mb-5" data-aos="fade-down-left" data-aos-duration="1200"> 
                                    CALL US AT ANYTIME
                                </span>
                                <div class="call-anytime">
                                    <a href="#0" class="cal-box d-center" data-aos="zoom-in-left" data-aos-duration="1400">
                                        <span class="boxs n0-clr d-flex align-items-center gap-1">
                                            <span class="fs20 fw_700">
                                                Call
                                            </span>
                                            <i class="ph ph-phone-call fs-five"></i>
                                        </span>
                                    </a>
                                    <a href="#0" class="cal-box d-center" data-aos="zoom-in-right" data-aos-duration="1400">
                                        <span class="boxs ph-text d-block n4-clr d-block fw_700">
                                            (629) 555-0129
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7" data-aos="zoom-in-down" data-aos-duration="1600">
                        <div class="action-form">
                            <span class="display-two nw1-clr mb-xxl-15 mb-xl-10 mb-lg-8 mb-5">
                                Subscribe To Our Newsletter
                            </span>
                            <form action="#0">
                                <div class="row g-6">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <a href="#0" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                                                <span class="kew-text n5-bg n0-clr">
                                                    I Agree T&CS
                                                </span>
                                            </a>
                                            <button type="submit" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                                                <span class="kew-text p1-bg n4-clr">
                                                    Submit Now
                                                </span>
                                                <span class="kew-arrow p1-bg">
                                                    <span class="kt-one">
                                                        <i class="ti ti-arrow-right n4-clr"></i>                                
                                                    </span>
                                                    <span class="kt-two">
                                                        <i class="ti ti-arrow-right n4-clr"></i>                               
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-sun">
            <img src="assets/images/global/call-sun.png" alt="call-sun">
        </div>
        <div class="call-posi-car">
            <img src="assets/images/lottery/lc4.png" alt="img">
        </div>
    </section> --}}
    <!-- ==== Callto Action section ==== -->

    <!-- ==== Blog section ==== -->
    {{-- <section  class="blog-section1 pt-120 pb-120">
        <!--Section Header-->
        <div class="container">
            <div class="row g-xl-4 g-3 align-items-center justify-content-between mb-xxl-12 mb-xl-10 mb-8">
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <div class="section__title">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex flex-wrap align-items-center gap-3" data-aos="zoom-in-down" data-aos-duration="1200">
                            <img src="assets/images/global/section-icon.png" alt="img">
                            <h5 class="s1-clr fw_700">
                                Recent Blog
                            </h5>
                        </div>
                        <span class="display-four d-block n4-clr">
                            News & <span class="act4-clr act4-underline" data-aos="zoom-in-left" data-aos-duration="1000">Analysis </span>
                        </span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <div class="browse-more" data-aos="zoom-in-up" data-aos-duration="2000">
                        <a href="blog-details.html" class="cmn__collection radius-circle s1-bg d-center position-relative ms-lg-auto">
                            <span class="cmn-cont-box text-center position-relative">
                                <span class="icon mb-1">
                                    <i class="ph-bold ph-arrow-up-right n0-clr fs-three"></i>
                                </span>
                                <span class="d-block n0-clr fw_700">
                                    Browse More
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Section Header-->

        <!--blog body Header-->
        <div class="container">
            <div class="row g-6">
                <div class="col-lg-6 col-md-6" data-aos="zoom-in-down" data-aos-duration="1400">
                    <div class="blog-items1 blog-v1-hover">
                        <div class="boxs">
                            <div class="thumb mb-xxl-6 mb-4">
                                <img src="assets/images/blog/blog-new1.png" alt="blog-img">
                                <div class="dats d-center">
                                    <span class="bos">
                                        <span class="d-block nw1-clr fw_700">
                                            12/
                                        </span>
                                        <span class="d-block nw1-clr fw_700">
                                            Aug
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="mb-xxl-4 mb-3">
                                    <a href="blog-details.html" class="n4-clr">
                                        The Online Lottery Platforms
                                    </a>
                                </h3>
                                <p class="fs18 pra bbd pb-xxl-5 pb-xl-4 pb-3 mb-xxl-6 mb-xl-4 mb-3">
                                    From Traditional Draws to Digital Delights: Tracing the Transformative Journey of Online Lottery Platforms.
                                </p>
                                <a href="blog-details.html" class="kewta-btn d-inline-flex align-items-center">
                                    <span class="kew-text n4-bg n0-clr">
                                        Read More
                                    </span>
                                    <div class="kew-arrow n4-bg">
                                        <div class="kt-one">
                                            <i class="ti ti-arrow-right n0-clr"></i>                                
                                        </div>
                                        <div class="kt-two">
                                            <i class="ti ti-arrow-right n0-clr"></i>                               
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-duration="1600">
                    <div class="blog-items1 blog-v1-hover">
                        <div class="boxs">
                            <div class="thumb mb-xxl-6 mb-4">
                                <img src="assets/images/blog/blog-new2.png" alt="blog-img">
                                <div class="dats d-center">
                                    <span class="bos">
                                        <span class="d-block nw1-clr fw_700">
                                            12/
                                        </span>
                                        <span class="d-block nw1-clr fw_700">
                                            Aug
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="mb-xxl-4 mb-3">
                                    <a href="blog-details.html" class="n4-clr">
                                        The Allure of Online Lottery Jackpots
                                    </a>
                                </h3>
                                <p class="fs18 pra bbd pb-xxl-5 pb-xl-4 pb-3 mb-xxl-6 mb-xl-4 mb-3">
                                    Learn about strategic number selection, the thrill of anticipation, and the joy of claiming a dream car.
                                </p>
                                <a href="blog-details.html" class="kewta-btn d-inline-flex align-items-center">
                                    <span class="kew-text n4-bg n0-clr">
                                        Read More
                                    </span>
                                    <div class="kew-arrow n4-bg">
                                        <div class="kt-one">
                                            <i class="ti ti-arrow-right n0-clr"></i>                                
                                        </div>
                                        <div class="kt-two">
                                            <i class="ti ti-arrow-right n0-clr"></i>                               
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--blog body Header-->
    </section> --}}
    <!-- ==== Blog section ==== -->

    <!-- ==== Question section ==== -->
    {{-- <section  class="question-section pt-120 pb-120">
        <!--Section Header-->
        <div class="container">
            <div class="row g-xl-4 g-3 justify-content-center mb-xxl-10 mb-xl-8 mb-7">
                <div class="col-lg-6">
                    <div class="section__title text-center ">
                        <div class="subtitle-head mb-xxl-4 mb-sm-4 mb-3 d-flex justify-content-center flex-wrap align-items-center gap-3" data-aos="zoom-in-up" data-aos-duration="1400">
                            <img src="assets/images/global/section-icon.png" alt="img">
                            <h5 class="s1-clr fw_700">
                                You Have Questions
                            </h5>
                        </div>
                        <span class="display-four d-block n4-clr" data-aos="fade-down-left" data-aos-duration="1600">
                            We Have 
                            <span class="act4-clr act4-underline">
                                Answers
                            </span>
                        </span>
                        <p class="n3-clr fs18 mt-xxl-4 mt-3" data-aos="zoom-in-down" data-aos-duration="1800">
                            Do not hesitate to send us an email if you can't find what you're looking for.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Section Header-->

        <!--Question body-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="question-wrapper1">
                        <div class="singletab">
                            <div class="question-tab mb-xxl-15 mb-xl-10 mb-lg-8 mb-7">
                                <ul class="tablinks">
                                    <li class="nav-links active">
                                        <button class="tablink">
                                            Ticket Purchasing
                                        </button>
                                    </li>
                                    <li class="nav-links">
                                        <button class="tablink">
                                            Draw and Winners
                                        </button>
                                    </li>
                                    <li class="nav-links">
                                        <button class="tablink">
                                            Car Prizes
                                        </button>
                                    </li>
                                    <li class="nav-links">
                                        <button class="tablink">
                                            Technical Support
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabcontents">
                                <div class="tabitem active">
                                    <div class="accordion-section">
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How and when are the winners selected?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        Can I see the draw live?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How will I be notified if I win?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="accordion-section">
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How and when are the winners selected?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single this-single active">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        Can I see the draw live?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How will I be notified if I win?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="accordion-section">
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How and when are the winners selected?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single this-single active">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        Can I see the draw live?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How will I be notified if I win?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabitem">
                                    <div class="accordion-section">
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How and when are the winners selected?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single this-single active">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        Can I see the draw live?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-single">
                                            <h5 class="header-area">
                                                <button class="accordion-btn d-flex justify-content-between w-100" type="button">
                                                    <span class="fs20 fw_700 n4-clr d-block">
                                                        How will I be notified if I win?
                                                    </span>
                                                    <span class="faq-icon">
                                                        <i class="ph-bold ph-caret-down n4-clr"></i>
                                                    </span>
                                                </button>
                                            </h5>
                                            <div class="content-area">
                                                <div class="content-body ">
                                                    <p>
                                                        Yes, the course includes collaborative projects to simulate real-world design scenarios. This fosters teamwork and provides valuable experience
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Question body-->
    </section> --}}
    <!-- ==== Question section ==== -->

    <!-- ==== Sponsor1 section ==== -->
    {{-- <div  class="sponsor-section1 pt-120 pb-120 overflow-hidden">
        <!--Section Header-->
        <div class="container">
            <div class="row g-xl-4 g-3 justify-content-center mb-xxl-15 mb-xl-10 mb-7">
                <div class="col-lg-6">
                    <div class="section__title text-center">
                        <span class="display-four d-block n4-clr" data-aos="zoom-in-down" data-aos-duration="1200">
                            <span class="act4-clr act4-underline">
                                Featured
                            </span>
                            In
                        </span>
                        <p class="n3-clr fs18 mt-xxl-4 mt-3" data-aos="zoom-in-down" data-aos-duration="1400">
                            These features highlight our dedication to providing a secure and exciting platform for players worldwide.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Section Header-->

        <!--Sponsor boydss-->
        <div class="container">
            <div class="sponsor-borderwrap">
                <div class="swiper sponsor-wrap">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor-items">
                                <img src="assets/images/global/s1.png" alt="sponsors-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-items">
                                <img src="assets/images/global/s2.png" alt="sponsors-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-items">
                                <img src="assets/images/global/s3.png" alt="sponsors-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-items">
                                <img src="assets/images/global/s4.png" alt="sponsors-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Sponsor boyds-->
    </div> --}}
    <!-- ==== Sponsor1 section ==== -->

    <!-- ==== tablet button section ==== -->
    {{-- <div class="tablet-section tablet-custom-v1 n4-bg pt-120 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section__title text-center tablet-section-title pb-120 position-relative">
                        <div class="kewta-btn d-inline-flex mb-xxl-8 mb-6 align-items-center">
                            <span class="kew-text act3-border p1-clr">
                                Don't Miss Out
                            </span>
                            <div class="kew-arrow act3-bg">
                                <div class="kt-one">
                                    <i class="ti ti-arrow-right n4-clr"></i>                                
                                </div>
                                <div class="kt-two">
                                    <i class="ti ti-arrow-right n4-clr"></i>                               
                                </div>
                            </div>
                        </div>
                        <span class="display-two d-block n0-clr" data-aos="zoom-in-down" data-aos-duration="1200">
                            Play for Life-Changing Winning Prizes
                        </span>
                        <img src="assets/images/global/life-arrow.png" alt="img" class="tablet-arrow">
                        <section class="pb-120 mt-minus-50">
                            <div class="container">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="lottery-wrapper style--two">
                                    <div class="action-header">
                                      <div class="left">
                                        <ul>
                                          <li><a href="#0">5 Tickets</a></li>
                                          <li><a href="#0">10 Tickets</a></li>
                                          <li><a href="#0">15 Tickets</a></li>
                                          <li><a href="#0">20 Tickets</a></li>
                                        </ul>
                                      </div>
                                      <div class="right">
                                        <ul>
                                          <li>
                                            <i class="las la-clock"></i>
                                            <div class="clock2" data-clock="2023/06/12"><div><span>00</span><p>d</p></div><div><span>00</span><p>h</p></div><div><span>00</span><p>m</p></div><div><span>00</span><p>s</p></div></div>
                                          </li>
                                          <li>
                                            <button type="button">
                                              <i class="las la-trash"></i>
                                              <span>Erase All</span>
                                            </button>
                                          </li>
                                          <li>
                                            <button type="button">
                                              <i class="las la-table"></i>
                                              <span>Quick Pick All</span>
                                            </button>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                    <div class="row mt-50 mb-none-30">
                                      <div class="col-lg-6 mb-30">
                                        <div class="lottery-single style--two">
                                          <button class="lottery-single__close"><i class="las la-times"></i></button>
                                          <div class="lottery-single__header">
                                            <div class="top">
                                              <span class="titcket-number">Ticket #2</span>
                                              <ul>
                                                <li>
                                                  <button>
                                                    <i class="las la-table"></i>
                                                    <span>Quick Pick</span>
                                                  </button>
                                                </li>
                                                <li>
                                                  <button><i class="las la-trash"></i> </button>
                                                </li>
                                              </ul>
                                            </div>
                                            <ul class="lottery-single__selected-number justify-content-center">
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                            </ul>
                                          </div><!-- lottery-single__header end -->
                                          <div class="lottery-single__body">
                                            <p class="text-white mb-2">Select 5 numbers</p>
                                            <ul class="lottery-single__number">
                                              <li>1</li>
                                              <li>2</li>
                                              <li>3</li>
                                              <li>4</li>
                                              <li>5</li>
                                              <li>6</li>
                                              <li>7</li>
                                              <li class="active">8</li>
                                              <li class="active">9</li>
                                              <li class="active">10</li>
                                              <li>11</li>
                                              <li>12</li>
                                              <li>13</li>
                                              <li>14</li>
                                              <li>15</li>
                                              <li>16</li>
                                              <li>17</li>
                                              <li>18</li>
                                              <li>19</li>
                                              <li>20</li>
                                              <li class="">21</li>
                                              <li>22</li>
                                              <li>23</li>
                                              <li>24</li>
                                              <li>25</li>
                                              <li>26</li>
                                              <li>27</li>
                                              <li>28</li>
                                              <li>29</li>
                                              <li>30</li>
                                              <li>31</li>
                                              <li>32</li>
                                              <li>33</li>
                                              <li>34</li>
                                              <li class="">35</li>
                                              <li>36</li>
                                              <li>37</li>
                                              <li>38</li>
                                              <li>39</li>
                                              <li>40</li>
                                              <li>41</li>
                                              <li>42</li>
                                              <li>43</li>
                                              <li>44</li>
                                              <li>45</li>
                                              <li>46</li>
                                              <li>47</li>
                                              <li>48</li>
                                              <li>49</li>
                                              <li>50</li>
                                            </ul>
                                          </div><!-- lottery-single__body end -->
                                          <div class="lottery-single__footer">
                                            <p class="text-white mb-2">Select 2 lucky numbers</p>
                                            <ul class="lottery-single__number justify-content-center">
                                              <li>1</li>
                                              <li>2</li>
                                              <li>3</li>
                                              <li>4</li>
                                              <li>5</li>
                                              <li>6</li>
                                              <li>7</li>
                                              <li>8</li>
                                              <li>9</li>
                                              <li>10</li>
                                              <li>11</li>
                                            </ul>
                                          </div><!-- lottery-single__footer end -->
                                        </div><!-- lottery-single end -->
                                      </div>
                                      <div class="col-lg-6 mb-30">
                                        <div class="lottery-single style--two">
                                          <button class="lottery-single__close"><i class="las la-times"></i></button>
                                          <div class="lottery-single__header">
                                            <div class="top">
                                              <span class="titcket-number">Ticket #2</span>
                                              <ul>
                                                <li>
                                                  <button>
                                                    <i class="las la-table"></i>
                                                    <span>Quick Pick</span>
                                                  </button>
                                                </li>
                                                <li>
                                                  <button><i class="las la-trash"></i> </button>
                                                </li>
                                              </ul>
                                            </div>
                                            <ul class="lottery-single__selected-number justify-content-center">
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                              <li>00</li>
                                            </ul>
                                          </div><!-- lottery-single__header end -->
                                          <div class="lottery-single__body">
                                            <p class="text-white mb-2">Select 5 numbers</p>
                                            <ul class="lottery-single__number">
                                              <li>1</li>
                                              <li>2</li>
                                              <li>3</li>
                                              <li>4</li>
                                              <li>5</li>
                                              <li>6</li>
                                              <li>7</li>
                                              <li>8</li>
                                              <li>9</li>
                                              <li>10</li>
                                              <li>11</li>
                                              <li>12</li>
                                              <li>13</li>
                                              <li>14</li>
                                              <li>15</li>
                                              <li>16</li>
                                              <li>17</li>
                                              <li>18</li>
                                              <li>19</li>
                                              <li>20</li>
                                              <li>21</li>
                                              <li>22</li>
                                              <li>23</li>
                                              <li>24</li>
                                              <li>25</li>
                                              <li>26</li>
                                              <li>27</li>
                                              <li>28</li>
                                              <li>29</li>
                                              <li>30</li>
                                              <li>31</li>
                                              <li>32</li>
                                              <li>33</li>
                                              <li>34</li>
                                              <li>35</li>
                                              <li>36</li>
                                              <li>37</li>
                                              <li>38</li>
                                              <li>39</li>
                                              <li>40</li>
                                              <li>41</li>
                                              <li>42</li>
                                              <li>43</li>
                                              <li>44</li>
                                              <li>45</li>
                                              <li>46</li>
                                              <li>47</li>
                                              <li>48</li>
                                              <li>49</li>
                                              <li>50</li>
                                            </ul>
                                          </div><!-- lottery-single__body end -->
                                          <div class="lottery-single__footer">
                                            <p class="text-white mb-2">Select 2 lucky numbers</p>
                                            <ul class="lottery-single__number justify-content-center">
                                              <li>1</li>
                                              <li>2</li>
                                              <li>3</li>
                                              <li>4</li>
                                              <li>5</li>
                                              <li>6</li>
                                              <li>7</li>
                                              <li>8</li>
                                              <li>9</li>
                                              <li>10</li>
                                              <li>11</li>
                                            </ul>
                                          </div><!-- lottery-single__footer end -->
                                        </div><!-- lottery-single end -->
                                      </div>
                                    </div>
                                    <div class="lottery-wrapper__btn">
                                      <a href="#0" class="btn-border text-white">Add Tickets</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12 mt-50">
                                  <div class="buy-lottery-ticket">
                                    <div class="left">
                                      <div class="sub-total-price">
                                        <p>Ticket Price (3 tickets X $ 4.99)</p>
                                        <span>$14.97</span>
                                      </div>
                                      <div class="total-price">
                                        <p>Ticket Price (3 tickets X $ 4.99)</p>
                                        <span>$14.97</span>
                                      </div>
                                    </div>
                                    <div class="right"><a href="#0" class="cmn-btn">buy tickets</a></div>
                                  </div>
                                </div><!-- col-lg-12 -->
                                <div class="col-lg-12 pt-120">
                                  <div class="pick-lottery-package">
                                    <h2 class="title">Choose a Quick Pick</h2>
                                    <div class="lottery-package-list">
                                      <a href="#0">3 Quick Picks For $14.97</a>
                                      <a href="#0">5 Quick Picks For $24.95</a>
                                      <a href="#0">10 Quick Picks For $49.90</a>
                                      <a href="#0">20 Quick Picks For $99.80</a>
                                    </div>
                                  </div>
                                </div><!-- col-lg-12 -->
                              </div>
                            </div>
                          </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="tags-container relative"></div>
        </div>
    </div> --}}
    <!-- ==== tablet button section ==== -->

    <!-- ==== Footer section ==== -->
    <footer  class="footer-section3 n5-bg position-relative cus-z1 overflow-hidden">
        <img src="assets/images/global/v3star.png" alt="star" class="v3-star">
        <div class="call-sun">
            <img src="assets/images/global/call-sunv3.png" alt="call-sun">
        </div>

        <!--Text Animation -->
        <div class="banner-textanimation2">
            <div class="textcircle2">
                <div class="text2">
                    <p>
                        <span>Explore</span> <span>More</span> <span>Explore</span> <span>More</span>
                    </p>
                </div>
            </div>
            <a href="#0" class="icon-explore">
                <span class="icon">
                    <i class="ph-bold ph-arrow-up-right"></i>
                </span>
            </a>
        </div>
        <!--Text Animation -->

        {{-- <div class="footer-top pt-120 pb-120">
            <div class="container pb-120">
                <div class="footer-v3-explore d-flex align-items-center justify-content-between">
                    <span class="display-one n0-clr fw_800" data-aos="zoom-in-down" data-aos-duration="1400">
                        To Explore
                        <span class="d-block" data-aos="zoom-in-up" data-aos-duration="1600">More Lotteries</span>
                    </span>
                    <a href="#0" data-aos="zoom-in-right" data-aos-duration="1600">
                        <img src="assets/images/global/v3-rightarrow.png" alt="img">
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row g-6 justify-content-sm-start justify-content-center text-sm-start text-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="zoom-out" data-aos-duration="1500">
                        <div class="footer-items3">
                            <a href="#0" class="footer-v2-logo d-block m-sm-0 m-auto mb-xxl-8 mb-xl-7 mb-6 pb-xl-0 pb-3">
                                <img src="assets/images/logo/footer-logov3.png" alt="img">
                            </a>
                            <ul class="social-wrap d-flex justify-content-center justify-content-sm-start align-items-center gap-xxl-3 gap-2 flex-wrap">
                                 <li>
                                    <a href="#" class="soc-item soc-item-hover-black d-inline-flex radius-circle justify-content-center align-items-center n4-border">
                                        <svg width="13" height="21" viewBox="0 0 13 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 8.53125V12.5312H4V19.5312H8V12.5312H11L12 8.53125H8V6.53125C8 6.26603 8.10536 6.01168 8.29289 5.82414C8.48043 5.63661 8.73478 5.53125 9 5.53125H12V1.53125H9C7.67392 1.53125 6.40215 2.05803 5.46447 2.99572C4.52678 3.9334 4 5.20517 4 6.53125V8.53125H1Z" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                    
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="soc-item soc-item-hover-black d-inline-flex radius-circle justify-content-center align-items-center n4-border">
                                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 5.53125V9.53125M8.99998 5.53125V9.53125M1 2.53125V13.5312C1 13.7965 1.10536 14.0508 1.29289 14.2384C1.48043 14.4259 1.73478 14.5312 2 14.5312H4V18.5312L8 14.5312H13.584C13.85 14.5312 14.104 14.4263 14.291 14.2383L16.706 11.8243C16.893 11.6363 16.999 11.3823 16.999 11.1163V2.53125C16.999 2.26603 16.8936 2.01168 16.7061 1.82414C16.5186 1.63661 16.2642 1.53125 15.999 1.53125H1.999C1.73378 1.53125 1.47943 1.63661 1.29189 1.82414C1.10436 2.01168 1 2.26603 1 2.53125Z" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="soc-item soc-item-hover-black d-inline-flex radius-circle justify-content-center align-items-center n4-border">
                                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.5 5.03125V5.04125M1 5.53125C1 4.47038 1.42143 3.45297 2.17157 2.70282C2.92172 1.95268 3.93913 1.53125 5 1.53125H13C14.0609 1.53125 15.0783 1.95268 15.8284 2.70282C16.5786 3.45297 17 4.47038 17 5.53125V13.5312C17 14.5921 16.5786 15.6095 15.8284 16.3597C15.0783 17.1098 14.0609 17.5312 13 17.5312H5C3.93913 17.5312 2.92172 17.1098 2.17157 16.3597C1.42143 15.6095 1 14.5921 1 13.5312V5.53125ZM6 9.53125C6 10.3269 6.31607 11.09 6.87868 11.6526C7.44129 12.2152 8.20435 12.5312 9 12.5312C9.79565 12.5312 10.5587 12.2152 11.1213 11.6526C11.6839 11.09 12 10.3269 12 9.53125C12 8.7356 11.6839 7.97254 11.1213 7.40993C10.5587 6.84732 9.79565 6.53125 9 6.53125C8.20435 6.53125 7.44129 6.84732 6.87868 7.40993C6.31607 7.97254 6 8.7356 6 9.53125Z" stroke="#0E0E0E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                                                       
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="soc-item soc-item-hover-black d-inline-flex radius-circle justify-content-center align-items-center n4-border">
                                        <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.9822 1.53125L14.1052 1.53725C16.1192 1.75125 17.6322 2.20925 19.0712 3.21025C19.2429 3.33007 19.3726 3.50076 19.4422 3.69825C21.3182 9.01325 21.8152 13.6853 20.8932 15.9783C19.8902 17.9833 18.2872 19.5312 16.4992 19.5312C15.5592 19.5312 14.2422 17.9353 13.7222 16.5623L13.7022 16.5672C14.5402 16.4362 15.3922 16.2442 16.2742 15.9932C16.4005 15.9571 16.5185 15.8965 16.6214 15.8148C16.7243 15.7331 16.8101 15.6319 16.8739 15.517C16.9377 15.4022 16.9782 15.2759 16.9932 15.1453C17.0082 15.0148 16.9973 14.8826 16.9612 14.7563C16.9251 14.6299 16.8644 14.5119 16.7827 14.409C16.701 14.3061 16.5998 14.2204 16.4849 14.1566C16.3701 14.0928 16.2438 14.0522 16.1132 14.0372C15.9827 14.0223 15.8505 14.0331 15.7242 14.0693C12.4042 15.0193 9.59417 15.0193 6.27417 14.0693C6.01903 13.9963 5.74537 14.0277 5.51338 14.1566C5.2814 14.2854 5.1101 14.5011 5.03717 14.7563C4.96423 15.0114 4.99564 15.2851 5.12448 15.517C5.25331 15.749 5.46903 15.9203 5.72417 15.9932C6.44917 16.2002 7.15517 16.3663 7.85017 16.4923L8.29417 16.5662C7.81717 17.9362 6.59917 19.5312 5.66717 19.5312C3.92417 19.5312 2.39117 17.9763 1.40017 15.8873C0.559166 13.6813 1.03117 9.01925 2.81417 3.71325C2.87986 3.51678 3.00496 3.34556 3.17217 3.22325C4.56417 2.20725 5.97917 1.74825 7.88917 1.53825C8.07031 1.51841 8.25343 1.54845 8.41875 1.62511C8.58407 1.70178 8.72529 1.82216 8.82717 1.97325L8.89017 2.08025L9.54217 3.36825L9.70217 3.34925C10.5792 3.25925 11.4202 3.25925 12.2972 3.34925L12.4552 3.36825L13.1052 2.08125C13.1779 1.93704 13.2845 1.8126 13.4158 1.71856C13.5471 1.62452 13.6992 1.56368 13.8592 1.54125L13.9822 1.53125ZM7.99917 7.53125C7.52123 7.53123 7.05908 7.70236 6.69642 8.01366C6.33377 8.32495 6.09457 8.75583 6.02217 9.22825L6.00417 9.38225L5.99917 9.53125L6.00417 9.68125C6.03335 10.0693 6.17511 10.4404 6.41207 10.7491C6.64902 11.0578 6.97089 11.2906 7.33821 11.4191C7.70553 11.5476 8.10236 11.5661 8.48006 11.4724C8.85775 11.3787 9.19991 11.1769 9.46461 10.8916C9.7293 10.6064 9.90502 10.2501 9.97024 9.86645C10.0355 9.48281 9.98735 9.08848 9.83179 8.73178C9.67624 8.37508 9.42 8.0715 9.09448 7.85826C8.76897 7.64502 8.38831 7.53137 7.99917 7.53125ZM13.9992 7.53125C13.5212 7.53123 13.0591 7.70236 12.6964 8.01366C12.3338 8.32495 12.0946 8.75583 12.0222 9.22825L12.0042 9.38225L11.9992 9.53125L12.0042 9.68125C12.0334 10.0693 12.1751 10.4404 12.4121 10.7491C12.649 11.0578 12.9709 11.2906 13.3382 11.4191C13.7055 11.5476 14.1024 11.5661 14.4801 11.4724C14.8578 11.3787 15.1999 11.1769 15.4646 10.8916C15.7293 10.6064 15.905 10.2501 15.9702 9.86645C16.0355 9.48281 15.9873 9.08848 15.8318 8.73178C15.6762 8.37508 15.42 8.0715 15.0945 7.85826C14.769 7.64502 14.3883 7.53137 13.9992 7.53125Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                                                                      
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="zoom-out" data-aos-duration="1500">
                        <div class="footer-items3">
                            <h3 class="n0-clr mb-xxl-7 mb-xl-5 mb-lg-4 mb-3">
                                Quick Link
                            </h3>
                            <ul class="footer-item-link d-grid gap-xxl-4 gap-2">
                                <li>
                                    <a href="about.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="blog1.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        Our Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="winners.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        Winners List
                                    </a>
                                </li>
                                <li>
                                    <a href="winners.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        Winner Benefits
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6" data-aos="zoom-out" data-aos-duration="1500">
                        <div class="footer-items2">
                            <h3 class="n0-clr mb-xxl-7 mb-xl-5 mb-lg-4 mb-3">
                                Explore
                            </h3>
                            <ul class="footer-item-link d-grid gap-xxl-4 gap-2">
                                <li>
                                    <a href="user-panel.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        My Account
                                    </a>
                                </li>
                                <li>
                                    <a href="contest.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        Our Shop
                                    </a>
                                </li>
                                <li>
                                    <a href="basket.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        Cart
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" class="fs18 fw_600 nw4-clr hover-p1">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="zoom-out" data-aos-duration="1500">
                        <div class="footer-items3">
                            <h3 class="n0-clr mb-xxl-7 mb-xl-5 mb-lg-4 mb-3">
                                Contact Us
                            </h3>
                            <p class="nw4-clr fs18 mb-xxl-6 mb-4">
                                Valentin, Street Road 27, New
                                <span class="d-block nw4-clr">York. USA - 752252</span>
                            </p>
                            <a href="#0" class="nmbr fs20 fw_600 n0-clr d-block mb-xxl-2 mb-2 hover-p1">
                                (629) 555-0129
                            </a>
                            <a href="#0" class="mla hover-p1 fs18 nw4-clr">
                                binhan628@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="footer-web d-block">
                Lottovibe
            </span>
        </div> --}}
        <div class="footer-v3-newsletter p1-bg pt-lg-15 cus-z1 pt-10 pb-lg-15 pb-10">
            <div class="container">
                <div class="row g-xl-10 g-lg-10 g-4 align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-xl-4 col-lg-4">
                        <div class="section__title text-lg-start text-center">
                            <div class="subtitle-head" data-aos="zoom-in-down" data-aos-duration="1200">
                                <h2 class="n4-clr fw_700">
                                    Subscribe Now Our Newsletter
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <form action="#" class="news-form d-flex align-items-center">
                            <input type="text" placeholder="Enter Your Email Address...">
                            <button type="submit" class="kewta-btn kewta-alt d-inline-flex align-items-center">
                                <span class="kew-arrow n4-bg">
                                    <span class="kt-one">
                                        <i class="ti ti-arrow-right n0-clr"></i>                                
                                    </span>
                                    <span class="kt-two">
                                        <i class="ti ti-arrow-right n0-clr"></i>                               
                                    </span>
                                </span>
                            </button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <ul class="pri-link d-flex align-items-center justify-content-lg-end justify-content-center gap-xxl-6 gap-sm-6 gap-3">
                            <li>
                                <a href="#0" class="n4-clr hover-act4">
                                    Terms & Service
                                </a>
                            </li>
                            <li>
                                <a href="#0" class="n4-clr hover-act4">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="privacy-policy-footer">
            <div class="container">
                <div class="d-flex flex-wrap pb-xxl-8 pb-xl-6 pb-4 pt-xxl-8 pt-xl-6 pt-4 n4-bt gap-3 align-items-center justify-content-center">
                    <p class="footer-copyright flex-wrap justify-content-center n4-clr">
                        <span class="copy nw4-clr">
                            Copyright &copy; 2024 <a href="#" class="nw4-clr">Lottovibe</a>
                        </span>
                        <span class="midbor">

                        </span>
                        <span class="designed nw4-clr">
                            Designed By <a href="https://themeforest.net/user/pixelaxis" class="p1-clr"> Pixelaxis</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==== Footer section ==== -->

</main>



    <!-- ==== js Jquery start ==== -->
    
</body>
    @include('layouts.landing.script')
</html>