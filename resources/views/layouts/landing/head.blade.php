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
    <link rel="shortcut icon" href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/images/logo.png') }}" type="image/x-icon">


    <!-- ==== Tabler Icon ==== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css">
    <!-- ==== #style.min ==== -->
    <link rel="stylesheet" href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset((env('APP_ENV') === 'production' ? 'public/' : '') .'assets/fontawesome/css/all.min.css') }}">
</head>