<!doctype html>
<html lang="en" data-bs-theme-mode="dark" data-bs-theme="dark">

@include('layouts.keen.head')

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
class="app-default" cz-shortcut-listen="true">
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    @include('layouts.keen.nav')
    
    <!-- ==== Custom Cursor Pointer ==== -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- ==== Custom Cursor Pointer ==== -->


    
    <!-- ==== Main ==== -->
    <main class="overflow-hidden">


    <!-- ==== Login ==== -->
    <section class="container" style="height: 100vh;">       
        @yield('content')
    </section>
    <!-- ==== Login ==== -->


    </main>



    @include('layouts.keen.footer')
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    @include('layouts.keen.script')
    @yield('scripts')
</body>

</html>
