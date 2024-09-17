<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free.">
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes">
    <meta property="og:url" content="https://keenthemes.com/keen">
    <meta property="og:site_name" content="Keen by Keenthemes">
    <link rel="canonical" href="https://preview.keenthemes.com/keen/demo1/index.html">
    <link rel="shortcut icon" href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/images/logo.png') }}" type="image/x-icon">

    <!--begin::Fonts(mandatory for all pages)-->
    {{-- <link rel="stylesheet" href="/Keen_files/css"> --}}
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    {{-- <link href="/Keen_files/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
    <link href="/Keen_files/datatables.bundle.css" rel="stylesheet" type="text/css"> --}}
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'Keen_files/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'Keen_files/style.bundle.css') }}" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->
    {{-- <link href="/Keen_files/apexcharts.css" rel="stylesheet" type="text/css"> --}}
    <!--begin::Google tag-->
    <!-- our project just needs Font Awesome Solid + Brands -->
    <link href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/fontawesome/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/fontawesome/css/brands.css') }}" rel="stylesheet" />
    <link href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/fontawesome/css/solid.css') }}" rel="stylesheet" />
    <style>
        .numero {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #fff;
            border: 1px solid #ccc;
            text-align: center;
            line-height: 40px;
            display: inline-block;
            margin: 5px;
            cursor: pointer;
            color: black;
        }

        .seleccionado {
            background-color: green;
            color: white;
        }
        [data-kt-app-layout=dark-sidebar] .app-sidebar .menu .menu-item .menu-link.active {
            transition: color .2s ease;
            background-color: #00A261;
            color: var(--bs-primary-inverse);
        }
        .btn-check:active+[data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle .svg-icon, .btn-check:active+[data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle i, .btn-check:checked+[data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle .svg-icon, .btn-check:checked+[data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle i, .show>[data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle .svg-icon, .show>[data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle i, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle.active .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle.active i, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle.show .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle.show i, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle:active:not(.btn-active) .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle:active:not(.btn-active) i, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle:focus:not(.btn-active) .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle:focus:not(.btn-active) i, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle:hover:not(.btn-active) .svg-icon, [data-kt-app-layout=dark-sidebar] .app-sidebar .app-sidebar-toggle:hover:not(.btn-active) i {
            color: #00A261;
        }
        .scrolltop {
            background-color: #00A261;
        }
        .scrolltop:hover {
            background-color: #00A261;
        }
        .active>.page-link, .page-link.active {
            background-color: #00A261;
        }
    </style>
</head>