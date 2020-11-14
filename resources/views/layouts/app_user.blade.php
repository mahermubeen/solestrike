<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sole Strike</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Styles-->
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('css/flickity.css') !!}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper-shop-order">
        @include('layouts.navbars.menu-items')
        @include('user.popups.checkout_payment')
        @include('user.popups.shipping_info')

        @include('layouts.headers.user-header')

        <main class="user_main">
            @yield('content')
        </main>

        @include('layouts.footers.user-footer')
    </div>

    <!-- Scripts -->
    <script src="{!! asset('js/core/jquery.min.js') !!}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{!! asset('js/main.js') !!}"></script>

   
</body>

</html>
