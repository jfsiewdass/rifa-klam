<header class="header-section-v1 custom-fixed header-position">
    <div class="container-header">
        <div class="main-navbar main-navbar-white">
            <!-- <div class="main-navbar-black"></div> -->
            <nav class="navbar-custom">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="index.html" class="nav-brand d-xl-none">
                        <img class="w-100" src="{{ asset('assets/images/logo.jpg') }}" alt="logo">
                    </a>
                    <div class="d-flex gap-6">
                        <button class="navbar-toggle-btn d-block d-xl-none" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="navbar-toggle-item">
                    <div class="d-flex gap-5 flex-column flex-lg-row align-items-start align-items-xl-center justify-content-between mt-2 mt-xl-0">
                        <a href="index.html" class="nav-brand d-none d-xl-block">
                            <img class="w-100" src="{{ asset('assets/images/logo.jpg') }}" alt="logo">
                        </a>
                        <ul class="custom-nav d-xl-flex d-grid gap-4 gap-xl-5 gap-xxl-10">
                           
                            {{-- <li class="menu-item position-relative">
                                <button class="position-relative">
                                    Lotteries
                                </button>
                                <ul class="sub-menu">
                                    <li class="menu-link mb-xxl-2">
                                        <a href="contest.html">Contest</a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="contest-details.html">Contest Details</a>
                                    </li>
                                </ul>
                            </li> --}}
                           
                            <li class="menu-item itembg__1 position-relative">
                                <a href="contact.html" class="fw_500 {{ \Route::current()->getName() == 'home' ? 'active' : '' }}">
                                    Inicio
                                </a>
                            </li>
                            <li class="menu-item itembg__1 position-relative">
                                <a href="contact.html" class="fw_500 {{ \Route::current()->getName() == 'actual' ? 'active' : '' }}">
                                    Rifas actuales
                                </a>
                            </li>
                            <li class="menu-item itembg__1 position-relative">
                                <a href="contact.html" class="fw_500 {{ \Route::current()->getName() == 'winners' ? 'active' : '' }}">
                                    Ganadores
                                </a>
                            </li>
                            <li class="menu-item itembg__1 position-relative">
                                <a href="contact.html" class="fw_500 {{ \Route::current()->getName() == 'contact' ? 'active' : '' }}">
                                    Contacto
                                </a>
                            </li>
                            @guest
                            @else
                            <li class="menu-item itembg__1 position-relative">
                                <a href="{{ url('/admin') }}" class="fw_500">
                                    Administración
                                </a>
                            </li>
                            @endguest
                        </ul>
                        <div class="d-flex flex-wrap flex-xl-no-wrap align-items-center justify-content-lg-end gap-4">
                            {{-- <ul class="d-flex head-card align-items-center gap-3">
                               
                                <li>
                                    <a href="user-panel.html" class="cmn-circle">
                                        <i class="ti ti-user"></i>
                                    </a>
                                </li>
                            </ul> --}}
                            {{-- <div class="head-language">
                                <select name="country">
                                    <option value="1">
                                        EN
                                    </option>
                                    <option value="1">
                                        Bn
                                    </option>
                                    <option value="1">
                                        Uk
                                    </option>
                                    <option value="1">
                                        Us
                                    </option>
                                    <option value="1">
                                        Uk
                                    </option>
                                    <option value="1">
                                        EN
                                    </option>
                                </select>
                            </div> --}}
                            {{-- <a href="contest.html" class="kewta-btn d-inline-flex align-items-center">
                                <span class="kew-text p1-border n0-clr">
                                    Explore Now
                                </span>
                                <div class="kew-arrow p1-bg">
                                    <div class="kt-one">
                                        <i class="ti ti-arrow-right n4-clr"></i>                                
                                    </div>
                                    <div class="kt-two">
                                        <i class="ti ti-arrow-right n4-clr"></i>                               
                                    </div>
                                </div>
                            </a> --}}
                            <div class="invisible-menuthumb d-flex">
                                <a href="landing-nft1.html">
                                    <img src="assets/images/global/global-nft.png" alt="img">
                                </a>
                                <a href="landing-nft2.html">
                                    <img src="assets/images/global/global-nft2.png" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>