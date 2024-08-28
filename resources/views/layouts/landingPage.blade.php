<!doctype html>
<html lang="en">

@include('layouts.landing.head')

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

   
    @yield('content')
    <!-- ==== Win Lottery section ==== -->
    <div class="countdown-body justify-content-center" style="display: none" id="countdown-body">
        <div class="text-center">
            <i class="ph-light ph-clock-countdown text-center"></i>
        </div>
        <div id="countdown" class=""></div>
        <div class="text-center" style="display: none" id="countdown-redirect">
            <a href="#" onclick="redirect()" style="color: var(--n); font-size: 24px"><i class="ph-bold ph-arrow-right text-center"></i></a>
            {{-- Ir a pagar --}}
        </div>
    </div>

    <!-- ==== Footer section ==== -->
    <footer  class="footer-section3 n5-bg position-relative cus-z1 overflow-hidden">
        {{-- <img src="assets/images/global/v3star.png" alt="star" class="v3-star"> --}}
        {{-- <div class="call-sun">
            <img src="assets/images/global/call-sunv3.png" alt="call-sun">
        </div> --}}

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
                            Copyright &copy; 2024 <a href="#" class="nw4-clr">RIFAS KLAM</a>
                        </span>
                        <span class="midbor">

                        </span>
                        <span class="designed nw4-clr">
                            Designed By  Jsiewdass</a>
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
    @yield('scripts')
    
</html>