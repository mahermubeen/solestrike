<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sole Strike</title>

    <!--Styles-->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Carousal Link -->
    <link rel="stylesheet" href="../css/flickity.css">


</head>

<body>
    <div class="wrapper-shop">
        <div class="section1">
            <div class="container">
                <div class="header">
                    <figure class="menu-logo">
                        <img src="../img/open-menu (1).png" />
                    </figure>

                    <figure class="brand-logo">
                        <img src="../img/Group 222.png" />
                    </figure>

                    <div class="options">
                        <figure class="cart-logo">
                            <img src="../img/Group 2.png" />
                        </figure>
                        @guest
                            <a href="{{ route('login') }}" class="login-btn">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="signup-btn">Signup</a>

                            @endif
                        @else
                            <li class="nav-item dropdown right-span">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle user-name text-white" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right logout-p" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>

                <div class="head-content">
                    <div class="head-left">
                        <h4>Shop</h4>
                        <p>Check out the featured releases below or narrow down your search by using the dropdown filter
                            on the right.</p>
                    </div>
                    <div class="head-right">
                        <div class="dropdown">
                            <span>Adidas Alternate</span>
                            <img src="../img/Group 64.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section2">
            <div class="container">
                <div class="product-wrapper">
                    <figure class="box-1">
                        <img src="../img/Group 66.png" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">Shopify</p>
                        <div class="details-box">
                            <h5>Air Jordan 13 Retro <span>"Flint"</span></h5>
                            <div class="sale-tag">
                                <img src="../img/Path 75.png"/>
                                <span>$50</span>
                            </div>
                        </div>
                        <p class="p2">Having originally supposed to have made a return again in 2017, the Air Jordan 13
                            ‘Flint’ is back for the fourth time in true original form. </p>
                    </div>
                    <div class="box-3">
                        <div class="span1">
                            <p class="p-1">AVAILABILITY</p>
                            <p class="p-2">IN STOCK</p>
                        </div>
                        <div class="span2">
                            <p class="p-1">RELEASE DATE</p>
                            <p class="p-2">04.18.2020</p>
                        </div>
                        <div class="span3">
                            <p class="p-1">RETAIL</p>
                            <p class="p-2">$150</p>
                        </div>
                    </div>

                </div>

                <div class="product-wrapper">
                    <figure class="box-1">
                        <img src="../img/Group 225.png" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">Shopify</p>
                        <div class="details-box">
                            <h5>Air Jordan 13 Retro <span>"Flint"</span></h5>
                            <div class="sale-tag">
                                <img src="../img/Path 75.png"/>
                                <span>$50</span>
                            </div>
                        </div>
                        <p class="p2">Having originally supposed to have made a return again in 2017, the Air Jordan 13
                            ‘Flint’ is back for the fourth time in true original form. </p>
                    </div>
                    <div class="box-3">
                        <div class="span1">
                            <p class="p-1">AVAILABILITY</p>
                            <p class="p-2">IN STOCK</p>
                        </div>
                        <div class="span2">
                            <p class="p-1">RELEASE DATE</p>
                            <p class="p-2">04.18.2020</p>
                        </div>
                        <div class="span3">
                            <p class="p-1">RETAIL</p>
                            <p class="p-2">$150</p>
                        </div>
                    </div>

                </div>

                <div class="product-wrapper">
                    <figure class="box-1">
                        <img src="../img/Group 227.png" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">Shopify</p>
                        <div class="details-box">
                            <h5>Air Jordan 13 Retro <span>"Flint"</span></h5>
                            <div class="sale-tag">
                                <img src="../img/Path 75.png"/>
                                <span>$50</span>
                            </div>
                        </div>
                        <p class="p2">Having originally supposed to have made a return again in 2017, the Air Jordan 13
                            ‘Flint’ is back for the fourth time in true original form. </p>
                    </div>
                    <div class="box-3">
                        <div class="span1">
                            <p class="p-1">AVAILABILITY</p>
                            <p class="p-2">IN STOCK</p>
                        </div>
                        <div class="span2">
                            <p class="p-1">RELEASE DATE</p>
                            <p class="p-2">04.18.2020</p>
                        </div>
                        <div class="span3">
                            <p class="p-1">RETAIL</p>
                            <p class="p-2">$150</p>
                        </div>
                    </div>

                </div>

                <div class="product-wrapper">
                    <figure class="box-1">
                        <img src="../img/Group 66.png" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">Shopify</p>
                        <div class="details-box">
                            <h5>Air Jordan 13 Retro <span>"Flint"</span></h5>
                            <div class="sale-tag">
                                <img src="../img/Path 75.png"/>
                                <span>$50</span>
                            </div>
                        </div>
                        <p class="p2">Having originally supposed to have made a return again in 2017, the Air Jordan 13
                            ‘Flint’ is back for the fourth time in true original form. </p>
                    </div>
                    <div class="box-3">
                        <div class="span1">
                            <p class="p-1">AVAILABILITY</p>
                            <p class="p-2">IN STOCK</p>
                        </div>
                        <div class="span2">
                            <p class="p-1">RELEASE DATE</p>
                            <p class="p-2">04.18.2020</p>
                        </div>
                        <div class="span3">
                            <p class="p-1">RETAIL</p>
                            <p class="p-2">$150</p>
                        </div>
                    </div>

                </div>

                <div class="product-wrapper">
                    <figure class="box-1">
                        <img src="../img/Group 225.png" />
                    </figure>
                    <div class="box-2">
                        <p class="p1">Shopify</p>
                        <div class="details-box">
                            <h5>Air Jordan 13 Retro <span>"Flint"</span></h5>
                            <div class="sale-tag">
                                <img src="../img/Path 75.png"/>
                                <span>$50</span>
                            </div>
                        </div>
                        <p class="p2">Having originally supposed to have made a return again in 2017, the Air Jordan 13
                            ‘Flint’ is back for the fourth time in true original form. </p>
                    </div>
                    <div class="box-3">
                        <div class="span1">
                            <p class="p-1">AVAILABILITY</p>
                            <p class="p-2">IN STOCK</p>
                        </div>
                        <div class="span2">
                            <p class="p-1">RELEASE DATE</p>
                            <p class="p-2">04.18.2020</p>
                        </div>
                        <div class="span3">
                            <p class="p-1">RETAIL</p>
                            <p class="p-2">$150</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="upper-div">
                    <figure>
                        <img src="../img/solestrike-for-site.png" />
                    </figure>
                    <div class="social-links">
                        <a href="#" class="twitter">
                            <img src="../img/Group 40.png" />
                        </a>
                        <a href="#" class="insta">
                            <img src="../img/Path 63.png" />
                        </a>
                    </div>
                </div>
                <div class="lower-div">
                    <pre>Copyright © 2021   Sole Strike</pre>
                    <div class="right-div">
                        <a href="#">FAQ</a>
                        <a href="#">How It Works</a>
                        <a href="#">Track Order</a>
                        <a href="#">Terms Of Services</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>
