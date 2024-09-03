@extends('layouts.landingPage')
@section('content')
    <section class="banner-bredcrumbs pt-70-fixed n4-bg position-relative overflow-hidden overflow-visible">
        <div class="container">
            <div class="breadcrumbs-content position-relative cus-z1 pt-120 pb-120 text-center">
                <span class="mb-xxl-8 mb-xl-6 mb-5 display-two nw1-clr aos-init aos-animate" data-aos="zoom-in"
                    data-aos-duration="2000">
                    Lista de ganadores
                </span>
                <div class="box">
                    <ul class="bread d-flex justify-content-center align-items-center gap-2">
                        <li>
                            <a href="{{ route('home') }}" class="fs20 fw_600 nw1-clr">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <i class="ph ph-caret-double-right nw1-clr"></i>
                        </li>
                        <li>
                            <span class="fs20 fw_600 p1-clr">
                                Lista de ganadores
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Banner Shape Images-->
        <img src="assets/images/global/ball-shape19-1.png" alt="img" class="ball-shape-breadcrumb aos-init aos-animate"
            data-aos="zoom-in-right" data-aos-duration="2200">
        <img src="assets/images/global/ball-breadcrumbs.png" alt="img" class="ball-circle-breadcrumb">
        <img src="assets/images/global/shape-breadcrum-right.png" alt="img" class="shape-breadcrumbright">
        <!--Banner Shape Images-->


    </section>
    <section class="winners-section n0-bg">
        <div class="container">
            <div class="row my-5">
                @forelse ($lotteries as $item)
                    <div class="col-12 mb-3">
                        <div class="winner-main-items border radius12 px-xxl-3 px-2 py-xl-3 py-2">
                            <div class="thumb-basket position-relative d-center">
                                <img class="d-block w-100" src="{{ Storage::url($item->images[0]) }}" alt="img">
                            </div>
                            <div class="content">
                                <div class="border-bottom pb-xxl-5 pb-3">
                                    <h4 class="n4-clr mb-xxl-3 mb-2">
                                        {{ $item->name }}
                                    </h4>
                                    {{-- <span class="act4-clr fw_600 mb-2 d-block">
                            Draw took place on
                        </span> --}}
                                    <span class="fw_600 n4-clr">
                                        {{-- Saturday April 27.2024 --}}
                                        {{ $item->date }}
                                    </span>
                                </div>
                                <div class="pt-xxl-5 pt-3">
                                    <span class="fs20 fw_700 n4-clr mb-xxl-3 mb-3">
                                        Número ganador:
                                    </span>
                                    <div
                                        class="d-flex align-items-center gap-sm-2 gap-1 justify-content-lg-start justify-content-center">
                                        <button type="button" class="act3-bg radius12 cmn-40 d-center n4-clr fw_600"
                                            style="color: white">
                                            {{ $item->winner }}
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="win-man text-center m-lg-0 m-auto">
                                <div class="win-thumbs mb-xxl-3 mb-2">
                                    <i class="ph ph-trophy" style="font-size: 60px"></i>
                                </div>
                                <span class="n4-clr mb-1 d-block fw_700 fs20">
                                    {{ $item->winnerVoucher->first()->name . ' ' . $item->winnerVoucher->first()->surname }}
                                </span>
                                {{-- <span class="fw_600 n4-clr">
                        China
                    </span> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <h1 class="text-center">No hay ganadores aun</h1>
                @endforelse

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
