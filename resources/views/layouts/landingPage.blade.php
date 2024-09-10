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
    </div>

    <!-- ==== Footer section ==== -->
   @include('layouts.landing.footer')
    <!-- ==== Footer section ==== -->

</main>



    <!-- ==== js Jquery start ==== -->
    
</body>
    @include('layouts.landing.script')
    @yield('scripts')
    
</html>