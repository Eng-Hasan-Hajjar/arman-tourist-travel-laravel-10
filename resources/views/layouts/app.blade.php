<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="frontendAsset/lib/animate/animate.min.css" rel="stylesheet">
    <link href="frontendAsset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="frontendAsset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="frontendAsset/css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="frontendAsset/css/style.css" rel="stylesheet">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')


            <div class="container-fluid bg-primary py-5 mb-5 hero-header3">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                    </div>
                </div>
            </div>

            {{ $slot }}

            <div class="container-fluid bg-primary py-5 mb-5 hero-header2">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                    </div>
                </div>
            </div>


        </div>




    </body>



</html>
