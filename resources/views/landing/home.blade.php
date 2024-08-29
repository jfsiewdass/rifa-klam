@extends('layouts.landingPage')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
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
                @foreach ($lotteries as $lottery)
                    @foreach ($lottery->images as $img)
                        <div class="swiper-slide">
                            <div class="bn-carslide-item">
                                <img src="{{ Storage::url($img) }}" alt="img">
                            </div>
                        </div>
                    @endforeach
                @endforeach
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
<section  class="current-lottery pt-120 pb-120" id="down-scroll">
    <div class="container" >
        <!--Section Header-->
        {{-- <div class="row g-xl-4 g-3 align-items-center justify-content-between mb-xxl-15 mb-xl-10 mb-8">
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
        </div> --}}
        <!--Section Header-->

        <div class="singletab">
            <div class="question-tab main-lottery-tab mb-xxl-15 mb-xl-10 mb-lg-8 mb-7">
                {{-- <ul class="tablinks">
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
                </ul> --}}
            </div>
            <div class="tabcontents">
                <div class="tabitem active">
                    
                    <div class="row g-6">
                        @forelse ($lotteries as $lottery)
                            @php
                                $total = $lottery->number_range;
                                $numbers = $lottery->lotteryNumbers()->where('status_number_id', '<>', '1')->count();
                                $percent = $numbers * 100 / $total;
                            @endphp
                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="current-lottery-item cmn-cartborder current-bg position-relative radius24">
                                    <div class="current-l-badge position-relative cus-z1 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4 d-flex align-items-center justify-content-between pt-xxl-5 pt-4 pe-xxl-5 pe-4">
                                        <span class="draw-badge n4-clr">
                                            <span class="n4-clr position-relative fw_700 fs-eight">
                                                # {{ $lottery->unique_id }}
                                            </span>
                                        </span>
                                        {{-- <span class="cmn-40 n0-bg radius-circle n0-hover">
                                            <i class="ph ph-bold ph-shopping-cart n4-clr fs-six"></i>
                                        </span> --}}
                                    </div>
                                    <div class="thumb cus-z1 position-relative px-3 mb-xxl-10 mb-xl-8 mb-lg-6 mb-4">
                                        {{-- <img src="assets/images/lottery/lc1.png" alt="img"> --}}
                                        <img src="{{ Storage::url($lottery->images[0]) }}" alt="img">
                                    </div>
                                    <div class="content-middle">
                                        <div class="cmn-prrice-range px-xxl-6 px-xl-5 px-lg-4 px-3 d-flex align-items-center gap-2">
                                            <div class="range-custom position-relative" style="--range-width: {{ number_format($percent, 2) }}%;">
                                                <span class="curs-range"></span>
                                            </div>
                                            <span class="n4-clr soldout fw_700 fs-eight">
                                                {{  number_format($percent, 2) }}% Vendido
                                            </span>
                                        </div>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 nw4-bb py-xxl-5 py-sm-4 py-3 flex-wrap gap-3 align-items-center justify-content-between">
                                            <div class="box">
                                                <h4 class="mb-xxl-3 mb-2">
                                                    <a href="contest-details.html" class="n4-clr">
                                                        {{ $lottery->name }}
                                                    </a>
                                                </h4>
                                                {{-- <div class="d-flex align-items-center gap-xl-3 gap-2">
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
                                                </div> --}}
                                            </div>
                                            {{-- <span class="cmn-40 radius-circle act4-border n0-fillhover">
                                                <i class="ph-bold ph-empty act4-clr"></i>
                                            </span> --}}
                                        </div>
                                        <ul class="remaining-info px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-5 py-xl-3 py-2 nw4-bb d-flex align-items-center gap-xxl-5 gap-lg-3 gap-2">
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-clock fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    @php
                                                    $remainingDays = null;
                                                    if (isset($lottery->date)) {
                                                        $now = Carbon\Carbon::now();
                                                        $lotteryDate = Carbon\Carbon::createFromFormat('Y-m-d', $lottery->date);
                                                        $remainingDays = $lotteryDate->diffInDays($now);
                                                        
                                                    }

                                                    @endphp
                                                    {{ $remainingDays ? $remainingDays . ' DÍAS' : 'PROXIMAMENTE' }}
                                                </span>
                                            </li>
                                            <li class="vline-remaing">
            
                                            </li>
                                            <li class="d-flex align-items-center gap-2">
                                                <i class="ph ph-ticket fs-five n3-clr"></i>
                                                <span class="n3-clr fw_600">
                                                    {{ $total - $numbers }} DISPONIBLES
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="d-flex px-xxl-6 px-xl-5 px-lg-4 px-3 py-xxl-8 py-xl-6 py-lg-4 py-3 align-items-center justify-content-between">
                                            <h3 class="d-flex align-items-center gap-3 n4-clr">
                                                <span class="pr">${{ number_format($lottery->amount, 2) }}</span> <span class="fs-six text-uppercase">POR NÚMERO</span>
                                            </h3>
                                            <a href="{{ route('detail', $lottery->id) }}" class="cmn-40 radius-circle btn btn-success">
                                                <span>
                                                    <i class="ph-bold ph-arrow-up-right n0-clr lh"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h1 class="text-center">No existen lotteries disponibles</h1>
                        @endforelse
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
        <script>
            localStorage.removeItem('numerosSeleccionados');
            localStorage.removeItem('savedNumbers');
            localStorage.removeItem('lottery_id');
            localStorage.removeItem('timmer');
            Swal.fire('Excelente', 'Compra exitosa', 'success')
        </script>
    @endif
@endsection