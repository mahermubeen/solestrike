<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SoleStrike Dashboard') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Icons -->
    <link href="../css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS -->
    <link href="../css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="../css/theme.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />

</head>

<body class="{{ $class ?? '' }}">
    @auth()
        <div class="wrapper">
            @include('products.add_product')
            @include('products.edit_product')
            @include('products.delete_product')
            @include('layouts.navbars.sidebar')
            <div class="main-panel">
                @include('layouts.navbars.navbar')

                <div class="content">
                    @yield('content')
                </div>

                @include('layouts.footer')
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        @include('layouts.navbars.navbar')
        <div class="wrapper wrapper-full-page">
            <div class="full-page {{ $contentClass ?? '' }}">
                <div class="content">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    @endauth


    <script src="../js/core/jquery.min.js"></script>
    <script src="../js/core/popper.min.js"></script>
    <script src="../js/core/bootstrap.min.js"></script>
    <script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../js/plugins/bootstrap-notify.js"></script>
    <script src="../js/black-dashboard.min.js?v=1.0.0"></script>
    <script src="../js/theme.js"></script>
    <script src="../js/main.js"></script>

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {
                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {
                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }
                });
            });
        });

    </script>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <!--AJAX Script -->
    <script type='text/javascript'>
        $(document).ready(function() {
            
            // Update status
            $(document).on("click", "#active-btn", function() {
                var aa = $(this);

                var user_id = aa[0].attributes[1].nodeValue;
                var status = aa[0].checked;

                console.log("user_id", user_id);
                console.log("status", status);

                $.ajax({
                    url: 'updateStatus/' + user_id,
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        status: status
                    },
                    success: function(response) {
                        console.log("new_status", status);
                    }
                });
            });

             // edit product
             $(document).on("click", "#edit-btn", function() {
                $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


                var aa = $(this);
                var product_id = aa[0].attributes[1].nodeValue;
                // console.log("product_id", product_id);

                $.ajax({
                    url: '/products/show_product/' + product_id,
                    type: 'get',
                    dataType: 'JSON',
                    data: {
                        _token: CSRF_TOKEN,
                    },
                    success: function(response) {
                        console.log("response", response);

                        var id = response.id;
                        var name = response.name;
                        var quantity = response.quantity;
                        var retail_price = response.retail_price;
                        var deal = response.deal;
                        var detail = response.detail;
                        var release_date = response.release_date;
                        var source = response.source;
                        var avatar = response.avatar;
                    

                        $('#name-inpt')[0].attributes[5].nodeValue = name;
                        $('#quantity-inpt')[0].attributes[5].nodeValue = quantity;
                        $('#retail_price-inpt')[0].attributes[5].nodeValue = retail_price;
                        $('#deal-inpt')[0].attributes[5].nodeValue = deal;
                        $('#detail-inpt')[0].attributes[5].nodeValue = detail;
                        $('#release_date-inpt')[0].attributes[5].nodeValue = release_date;
                        $('#source-inpt')[0].attributes[5].nodeValue = source;


                       

                        // slicing img path
                        var img = $('#avatar-img')[0].attributes[1].nodeValue;
                        string = img.toString();
                        img = string.slice(0 , 28);

                        //converting to string and removing comas
                        var eventstring = new String();
                        eventstring = avatar.toString().replace(/"/g, "");

                        //adding preview image path
                        img =   img+'/'+eventstring;
                        $('#avatar-img')[0].attributes[1].nodeValue = img;

                        //adding img name to input file value
                        // $('#avatar-inpt')[0].attributes[4].nodeValue = eventstring;

                        // $('input[type="file"]').change(function(e){
                        //     var fileName = e.target.files[0].name;
                        //     $('#avatar-inpt')[0].attributes[4].nodeValue = fileName;
                        // });


                        //changing form path
                        var path = $('#edit-form')[0].attributes[3].nodeValue;
                        string = path.toString();
                        path = string.slice(0 , 60); //for localhost 49

                        var eventstring1 = new String();
                        eventstring1 = id.toString().replace(/"/g, "");

                        path = path+'/'+eventstring1;

                        console.log( "path",path);

                        $('#edit-form')[0].attributes[3].nodeValue = path;
                    }
                });
            });


             //delete product
             $(document).on("click", "#delete-btn", function() {
                var aa = $(this);
                var id = aa[0].attributes[1].nodeValue;
                // console.log("product_id", id);

                //changing form path
                var path = $('#delete-form')[0].attributes[3].nodeValue;
                        string = path.toString();
                        path = string.slice(0 , 62); // for localhost its 51

                        var eventstring1 = new String();
                        eventstring1 = id.toString().replace(/"/g, "");

                        path = path+'/'+eventstring1;

                        console.log( "path",path);

                        $('#delete-form')[0].attributes[3].nodeValue = path;
            });
        })

    </script>
</body>

</html>
