<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


                    <!--begin::Logo-->
                    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="https://preview.keenthemes.com/keen/demo1/index.html">
                            {{-- <img alt="Logo" src="./Keen_files/default-dark.svg" class="h-30px app-sidebar-logo-default"> --}}
                            <img class="h-50px app-sidebar-logo-default" src="{{ asset('assets/images/logo-with-name.png') }}" alt="logo">
                        </a>
                        <!--end::Logo image-->

                        <!--begin::Sidebar toggle-->
                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate" data-kt-toggle="true"
                            data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">

                            <i class="fa-solid fa-bars rotate-180"></i>
                        </div>
                        <!--end::Sidebar toggle-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::sidebar menu-->
                    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                        <!--begin::Menu wrapper-->
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                            <!--begin::Scroll wrapper-->
                            <div id="kt_app_sidebar_menu_scroll" class="my-5 mx-3">
                                <!--begin::Menu-->
                                <div class="
                                            menu 
                                            menu-column 
                                            menu-rounded 
                                            menu-sub-indention       
                                            fw-semibold  
                                        " id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                                    <!--begin:Menu item-->
                                    {{-- <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                        <span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-category fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i></span><span
                                                class="menu-title">Dashboards</span><span
                                                class="menu-arrow"></span></span>
                                        <div class="menu-sub menu-sub-accordion">>
                                            <div class="menu-item"><a class="menu-link active"
                                                    href="https://preview.keenthemes.com/keen/demo1/index.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Default</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="https://preview.keenthemes.com/keen/demo1/dashboards/projects.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Projects</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="https://preview.keenthemes.com/keen/demo1/dashboards/ecommerce.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">eCommerce</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                    href="https://preview.keenthemes.com/keen/demo1/dashboards/marketing.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Marketing</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item-->
                                            <div class="menu-inner flex-column collapse "
                                                id="kt_app_sidebar_menu_dashboards_collapse"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="https://preview.keenthemes.com/keen/demo1/dashboards/social.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Social</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="https://preview.keenthemes.com/keen/demo1/dashboards/bidding.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Bidding</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="https://preview.keenthemes.com/keen/demo1/dashboards/online-courses.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Online
                                                            Courses</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="https://preview.keenthemes.com/keen/demo1/dashboards/logistics.html"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Logistics</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div>
                                            
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--> --}}
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link " href="#">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-chart-pie"></i>
                                            </span>
                                            <span class="menu-title">Dashboard</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link " href="{{ route('home') }}">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-expand"></i>
                                            </span>
                                            <span class="menu-title">Ir a la pagina</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                     <!--begin:Menu item-->
                                    {{-- <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link {{ \Route::current()->getName() == 'banner.index' ? 'active' : '' }}" href="{{ route('banner.index') }}">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-image"></i>
                                            </span>
                                            <span class="menu-title">Banner</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div> --}}
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link {{ 
                                                                \Route::current()->getName() == 'lotteries.index' ||
                                                                \Route::current()->getName() == 'lotteries.create' ||
                                                                \Route::current()->getName() == 'lotteries.show' ||
                                                                \Route::current()->getName() == 'lotteries.edit' ? 'active' : ''
                                                                }}" href="{{ route('lotteries.index') }}">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-trophy"></i>
                                            </span>
                                            <span class="menu-title">Rifas</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link {{ \Route::current()->getName() == 'dayrate.index' ? 'active' : '' }}" 
                                            href="{{ route('dayrate.index') }}">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-money-bill"></i>
                                            </span>
                                            <span class="menu-title">Tasa del día</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link {{ 
                                                \Route::current()->getName() == 'users.index' ||
                                                \Route::current()->getName() == 'users.create' ||
                                                \Route::current()->getName() == 'users.edit' ? 'active' : ''
                                            }}" href="{{ route('users.index') }}">
                                            <span class="menu-icon">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                            <span class="menu-title">Usuarios</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Scroll wrapper-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::sidebar menu-->
                    <!--begin::Footer-->
                    {{-- <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                        <a href="https://preview.keenthemes.com/html/keen/docs"
                            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                            data-bs-original-title="200+ in-house components and 3rd-party plugins"
                            data-kt-initialized="1">

                            <span class="btn-label">
                                Docs &amp; Components
                            </span>

                            <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span
                                    class="path2"></span></i> </a>
                    </div> --}}
                    <!--end::Footer-->
                </div>