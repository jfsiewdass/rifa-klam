<div id="kt_app_header" class="app-header ">

    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
        id="kt_app_header_container">

        <!--begin::sidebar mobile toggle-->
        @guest
        @else
        <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px"
                id="kt_app_sidebar_mobile_toggle">
                <i class="fa-solid fa-bars rotate-180" style="font-size: 24px"></i>
            </div>
        </div>
        @endguest
        <!--end::sidebar mobile toggle-->


        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('lotteries.index') }}" class="d-lg-none">
                {{-- <img alt="Logo" src="./Keen_files/default-small.svg" class="theme-light-show h-30px">
                <img alt="Logo" src="./Keen_files/default-small-dark.svg" class="theme-dark-show h-30px"> --}}
                {{-- <img class="h-40px d-none d-sm-block" src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/images/logo-with-name.png') }}" alt="logo"> --}}
                <img  class="theme-dark-show h-40px" src="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/images/logo.png') }}" alt="logo">
            </a>
        </div>
        <!--end::Mobile logo-->

        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
            id="kt_app_header_wrapper">
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: &#39;append&#39;, lg: &#39;prepend&#39;}"
                data-kt-swapper-parent="{default: &#39;#kt_app_body&#39;, lg: &#39;#kt_app_header_wrapper&#39;}"
                >
                <!--begin::Menu-->
                <div class="
                            menu 
                            menu-rounded  
                            menu-column 
                            menu-lg-row 
                            my-5 
                            my-lg-0 
                            align-items-stretch 
                            fw-semibold
                            px-2 px-lg-0
                        " id="kt_app_header_menu" data-kt-menu="true">


                </div>
                <!--end::Menu-->
            </div>


            <!--begin::Menu wrapper-->

            <!--end::Menu wrapper-->


            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                @guest
                <div class="app-navbar-item ms-1 ms-lg-">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-45px h-35px w-md-40px h-md-40px me-5"
                        data-kt-menu-trigger="{default: &#39;click&#39;, lg: &#39;hover&#39;}"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <span class="symbol symbol-20px">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </span>
                    </div>
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-45px h-35px w-md-40px h-md-40px"
                        data-kt-menu-trigger="{default: &#39;click&#39;, lg: &#39;hover&#39;}"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <span class="symbol symbol-20px">
                            <a class="nav-link" href="{{ route('home') }}">Ir a inicio</a>
                        </span>
                    </div>
                </div>
                @endguest
                <!--begin::Languages-->
                <!-- <div class="app-navbar-item ms-1 ms-lg-3">
                    
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                        data-kt-menu-trigger="{default: &#39;click&#39;, lg: &#39;hover&#39;}"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <span class="symbol symbol-20px">
                            <img class="rounded" src="./Keen_files/united-states.svg" alt="">
                        </span>
                    </div>
                    
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-semibold py-4 fs-6 w-175px"
                        data-kt-menu="true">
                        
                        <div class="menu-item px-3">
                            <a href="https://preview.keenthemes.com/keen/demo1/account/settings.html"
                                class="menu-link d-flex px-5 active">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./Keen_files/united-states.svg" alt="">
                                </span>
                                English
                            </a>
                        </div>
                        
                        <div class="menu-item px-3">
                            <a href="https://preview.keenthemes.com/keen/demo1/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./Keen_files/spain.svg" alt="">
                                </span>
                                Spanish
                            </a>
                        </div>
                        
                        <div class="menu-item px-3">
                            <a href="https://preview.keenthemes.com/keen/demo1/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./Keen_files/germany.svg" alt="">
                                </span>
                                German
                            </a>
                        </div>
                       
                        <div class="menu-item px-3">
                            <a href="https://preview.keenthemes.com/keen/demo1/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./Keen_files/japan.svg" alt="">
                                </span>
                                Japanese
                            </a>
                        </div>
                        
                        <div class="menu-item px-3">
                            <a href="https://preview.keenthemes.com/keen/demo1/account/settings.html"
                                class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="./Keen_files/france.svg" alt="">
                                </span>
                                French
                            </a>
                        </div>
                       
                    </div>
                    
                </div> -->
                <!--end::Languages-->

                <!--begin::Theme mode-->
                <!-- <div class="app-navbar-item ms-1 ms-lg-3">
                    <a href="https://preview.keenthemes.com/keen/demo1/index.html?mode=light#"
                        class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                        data-kt-menu-trigger="{default:&#39;click&#39;, lg: &#39;hover&#39;}"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-1"><span
                                class="path1"></span><span class="path2"></span><span
                                class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span><span
                                class="path7"></span><span class="path8"></span><span
                                class="path9"></span><span class="path10"></span></i> <i
                            class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                                class="path2"></span></i></a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <div class="menu-item px-3 my-0">
                            <a href="https://preview.keenthemes.com/keen/demo1/index.html?mode=light#"
                                class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span><span
                                            class="path6"></span><span class="path7"></span><span
                                            class="path8"></span><span class="path9"></span><span
                                            class="path10"></span></i> </span>
                                <span class="menu-title">
                                    Light
                                </span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="https://preview.keenthemes.com/keen/demo1/index.html?mode=light#"
                                class="menu-link px-3 py-2 active" data-kt-element="mode"
                                data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <span class="menu-title">
                                    Dark
                                </span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="https://preview.keenthemes.com/keen/demo1/index.html?mode=light#"
                                class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> </span>
                                <span class="menu-title">
                                    System
                                </span>
                            </a>
                        </div>
                    </div>

                </div> -->
                <!--end::Theme mode-->

                <!--begin::User menu-->
                <div class="app-navbar-item ms-2 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    @auth
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                        data-kt-menu-trigger="{default: &#39;click&#39;, lg: &#39;hover&#39;}"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="fa-solid fa-circle-user" style="font-size: 28px"></i>
                    </div>
                   
                        
                    
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <i class="fa-solid fa-circle-user" style="font-size: 40px"></i>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{ Auth::user()->name . ' ' . Auth::user()->surname }} 
                                        {{-- <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span> --}}
                                    </div>

                                    <a href="#"
                                        class="fw-semibold text-muted text-hover-primary fs-7">
                                        {{ Auth::user()->getRoleNames()[0] }} </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->


                        


                       
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="#" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"
                                class="menu-link px-5">
                                Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    @endauth
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->

                {{-- <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                </div>
                <!--end::Header menu toggle--> --}}
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>