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

        <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <!-- Icons -->
    <link href="{!! asset('css/nucleo-icons.css') !!}" rel="stylesheet" />
    <!-- CSS -->
    <link href="{!! asset('css/black-dashboard.css') !!}" rel="stylesheet" />
    <link href="{!! asset('css/theme.css') !!}" rel="stylesheet" />

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
    <script src="{!! asset('js/core/popper.min.js') !!}"></script>
    <script src="{!! asset('js/core/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/plugins/perfect-scrollbar.jquery.min.js') !!}"></script>
    <script src="{!! asset('js/plugins/bootstrap-notify.js') !!}"></script>
    <script src="{!! asset('js/black-dashboard.min.js?v=1.0.0') !!}"></script>
    <script src="{!! asset('js/theme.js') !!}"></script>
    <script src="{!! asset('js/main.js') !!}"></script>

   <!--AJAX Script -->
   <script type='text/javascript'>
    $(document).ready(function() {

         // adding value of shoe size in form input

         $(document).on("click", "#shoe-size", function() {
            var aa = $(this);

            var selected_index = aa[0].options.selectedIndex;
            var shoe_size = aa[0][selected_index].attributes[0].nodeValue;

            // console.log("selected_index", selected_index);
            // console.log("shoe_size", shoe_size);

            $('#shoe-size_input')[0].attributes[3].nodeValue = shoe_size;

            // console.log("laal input ", $('#shoe-size_input')[0].attributes[3].nodeValue);

        });


    })

</script>
</body>

</html>
