<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sole Strike</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Styles-->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/flickity.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper-home">
        @include('layouts.navbars.menu-items')

        <div class="section1">
            <div class="container">
                <div class="header">
                    <figure id="menu" class="menu-logo">
                        <img src="../img/open-menu (1).png" />
                    </figure>

                    <a href="/" class="brand-logo">
                        <img src="../img/Group 222.png" />
                    </a>

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle user-name text-white" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right logout-p" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
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
                        <p class="main-para">The #1 Add To Cart Company In The Market.</p>
                        <p class="below-para">With years of experience in the reselling and add to cart industry, it is
                            clearly time for a change!</p>
                        <div class="last-btns">
                            <a href="#" class="learn-btn">Learn More</a>
                            <a href="#" class="continue-btn">
                                <span>Continue</span>
                                <img src="../img/Group 3.png" />
                            </a>
                        </div>
                    </div>

                    <div class="fig-div">
                        <img class="new1" src="../img/aabb.png"/>
                        <div class="main-wrapper">
                            <div class="main1 relative">
                                <img class="div1" src="../img/img_0.png" />
                                <div class="rod"></div>
                            </div>

                            <div class="main2 relative">
                                <img class="div2" src="../img/img_1.png" />
                                <div class="rod"></div>
                            </div>

                            <div class="main3 relative">
                                <img class="div3" src="../img/img_2.png" />
                                <div class="rod"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section2">
            <div class="container">
                <img class="whtie-circle" src="../img/Group 6.png" />
                <div class="left-sec">
                    <div class="box-wrapper">
                        <div class="left-box">
                            <span></span>
                            <h4>Checkout / Release</h4>
                            <p>Using the information you gave us when purchasing your slot, we checkout the sneakers for
                                you on release day. Simply check your email post-release.</p>
                        </div>
                    </div>

                    <div class="two-box-wrapper">
                        <div class="top-box">
                            <span></span>
                            <h4>Order Slots</h4>
                            <p>Checkout a slot for your favourite upcoming release. The service fee for each item
                                depends on the stock of the item, and difficulty to obtain it.</p>
                        </div>
                        <div class="bottom-box">
                            <span></span>
                            <h4>Enjoy!</h4>
                            <p>Delivered wthin 3-4 days of the release from the retailer. If for any reason your order
                                is unsuccessful you will be refunded right away.</p>
                        </div>
                    </div>
                </div>
                <div class="right-sec">
                    <div class="inner-box">
                        <p class="p1">THE PROCESS</p>
                        <h4>The easiest it's ever been.</h4>
                        <p class="p2">Our process is optimized to provide you with the product you want, without the
                            stress.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>

            <img class="white-dot" src="../img/Ellipse 18.png" />
        </div>

        <div class="section3">
            <div class="container">
                <div class="main-div">
                    <figure>
                        <img src="../img/tick.png" />
                    </figure>
                    <p class="p-up">TRIED & TESTED</p>
                    <h4>Our Success</h4>
                    <p class="p-down">Order an add to cart slot for your favorite upcoming release. Our fees vary based
                        on the limited nature of the product. We provide many different store options which are provided
                        below!</p>
                </div>
            </div>
        </div>

        <div class="section4">
            <div class="carousel" data-flickity='{ "groupCells": true }'>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/stussy.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/yeezy.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <figure>
                        <img src="../img/Group 7.png" />
                    </figure>
                    <div class="cell-wrapper">
                        <p class="p1">Sneaker Name</p>
                        <h4>Name Here</h4>
                        <p class="p2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi"</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section5">
            <div class="container">
                <div class="left-box">
                    <div class="main-box">
                        <p class="p-1">GET STARTED</p>
                        <h4>Let's Begin!</h4>
                        <p class="p-2">We provide many different store options for you to shop as you please.</p>
                        <a href="#">Shop Product</a>
                    </div>
                </div>
                <div class="right-box">
                    <figure>
                        <img src="../img/Group 27.png" />
                    </figure>
                    <figure>
                        <img src="../img/Group 24.png" />
                    </figure>
                    <figure>
                        <img src="../img/Group 25.png" />
                    </figure>
                    <figure>
                        <img src="../img/Group 23.png" />
                    </figure>
                    <figure>
                        <img src="../img/Group 26.png" />
                    </figure>
                    <figure>
                        <img src="../img/Group 32.png" />
                    </figure>
                </div>
            </div>
        </div>

        <div class="section6">
            <figure class="white-spot">
                <img src="../img/Ellipse 3.png" />
            </figure>
            <div class="wrapper1">
                <div class="left-img">
                    <img src="../img/Group 2205.png" />
                </div>
                <div class="right-box">
                    <div class="right-wrapper">
                        <figure>
                            <img src="../img/Path 90.png" />
                        </figure>
                        <p class="p1">POWERED BY SOLESTRIKE</p>
                        <h4>Strike Access</h4>
                        <p class="p2">Premiere Cook Group. Guaranteed To Improve Your Success & Secure The Hottest
                            Releases Every Drop.</p>
                        <a href="#">Join Now</a>
                    </div>

                </div>
            </div>

        </div>

        <div class="section7">
            <div class="container">
                <div class="sec1">
                    <figure>
                        <img src="../img/notification.png" />
                    </figure>
                    <p>PUSH NOTIFICATIONS</p>
                    <h4>Stay Notified</h4>
                </div>
                <div class="sec2">
                    <span class="red-spot"></span>
                    <div class="wrap1">
                        <figure>
                            <img src="../img/SS Logo Mark.png" />
                        </figure>
                        <p><span>Travis Scott Jordan 1 "Retro High" </span>limited slots now available! Don't miss out
                            because they will sell out fast!</p>
                    </div>
                </div>
                <figure class="home-pic">
                    <img src="../img/Group 226.png" />
                </figure>
            </div>

        </div>

        @include('layouts.navbars.footer')
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
