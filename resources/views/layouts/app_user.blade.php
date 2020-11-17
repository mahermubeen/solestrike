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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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


        //delete order
        $(document).on("click", "#delete-order-btn", function() {
            var aa = $(this);
            // var order_id = aa[0].attributes[1].nodeValue;

            var prod_id = aa[0].attributes[1].nodeValue;
            var user_id = aa[0].attributes[2].nodeValue;

            console.log("prod_id", prod_id);
            console.log("user_id", user_id);

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: 'delete_order/' + user_id + '/' + prod_id,
                type: 'post',
                dataType: "JSON",
                data: {
                    "_method": 'post',
                    "_token": CSRF_TOKEN
                },
                success: function(response) {
                    console.log("response order", response);
                    console.log("deleted prod_id", prod_id);
                    console.log("deleted user_id", user_id);
                }
            });
        });


        // edit order shipping info
        $(document).on("click", "#shipping-btn", function() {
                var aa = $(this);
                var order_id = aa[0].attributes[1].nodeValue;
                // console.log("order_id", order_id);

                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: 'show_shipping/' + order_id,
                    type: 'post',
                    dataType: 'json',
                    data: CSRF_TOKEN,
                    success: function(response) {
                        console.log("response", response);

                        var id = response.id;
                        var first_name = response.first_name;
                        var last_name = response.last_name;
                        var full_name = first_name+ ' '+ last_name;
                        var address_1 = response.address_1;
                        var zip = response.zip;
                        var city = response.city;
                        var state = response.state;
                        var phone = response.phone;
                    

                        $('#full_name-inpt')[0].attributes[3].nodeValue = full_name;
                        $('#address_1-inpt')[0].attributes[3].nodeValue = address_1;
                        $('#zip-inpt')[0].attributes[3].nodeValue = zip;
                        $('#city-inpt')[0].attributes[3].nodeValue = city;
                        $('#state-inpt')[0].attributes[3].nodeValue = state;
                        $('#phone-inpt')[0].attributes[3].nodeValue = phone;


                        //changing shipping form path
                        var path = $('#edit-shipping-form')[0].attributes[3].nodeValue;
                        // console.log("form-path", path);

                        string = path.toString();
                        path = string.slice(0 , 60); //for localhost = 49, for server = 60

                        var eventstring1 = new String();
                        eventstring1 = id.toString().replace(/"/g, "");

                        path = path+'/'+eventstring1;


                        $('#edit-shipping-form')[0].attributes[3].nodeValue = path;
                    }
                });
            });

    })

</script>
</body>

</html>
