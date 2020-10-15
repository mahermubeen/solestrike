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
</head>

<body>
    <div class="wrapper-home">
        <div class="section1">
            <div class="container">
                <div class="header">
                    <figure class="menu-logo">
                        <img src="../images/open-menu (1).png" />
                    </figure>

                    <figure class="brand-logo">
                        <img src="../images/solestrike-logo.png" />
                    </figure>

                    <div class="options">
                        <figure class="cart-logo">
                            <img src="../images/Group 2.png" />
                        </figure>

                        @guest
                            <a href="{{ route('login') }}" class="login-btn">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="signup-btn">Signup</a>

                            @endif
                        @else
                            <li class="nav-item dropdown right-span">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle user-name" href="#" role="button"
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
                        <p class="main-para">The #1 Add To Cart Company In The Market.</p>
                        <p class="below-para">With years of experience in the reselling and add to cart industry, it is
                            clearly time for a change!</p>
                        <div class="last-btns">
                            <a href="#" class="learn-btn">Learn More</a>
                            <a href="#" class="continue-btn">
                                <span>Continue</span>
                                <img src="../images/Group 3.png" />
                            </a>
                        </div>
                    </div>
                    <div class="fig-div">
                        <img src="../images/Group 224.png" />
                    </div>
                </div>
            </div>
        </div>

        <div class="section2">
            <div class="container">
                <img class="whtie-circle" src="../images/Group 6.png" />
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

            <img class="white-dot" src="../images/Ellipse 18.png" />
        </div>

        <div class="section3">
            <div class="container">
                <div class="main-div">
                    <figure>
                        <img src="../images/tick.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/stussy.png" />
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
                        <img src="../images/yeezy.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 7.png" />
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
                        <img src="../images/Group 27.png" />
                    </figure>
                    <figure>
                        <img src="../images/Group 24.png" />
                    </figure>
                    <figure>
                        <img src="../images/Group 25.png" />
                    </figure>
                    <figure>
                        <img src="../images/Group 23.png" />
                    </figure>
                    <figure>
                        <img src="../images/Group 26.png" />
                    </figure>
                    <figure>
                        <img src="../images/Group 32.png" />
                    </figure>
                </div>
            </div>
        </div>
        <div class="section6">
            <figure class="white-spot">
                <img src="../images/Ellipse 3.png" />
            </figure>
            <div class="wrapper1">
                <div class="left-img">
                    <img src="../images/Group 2205.png" />
                </div>
                <div class="right-box">
                    <div class="right-wrapper">
                        <figure>
                            <img src="../images/Path 90.png" />
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
                        <img src="../images/notification.png" />
                    </figure>
                    <p>PUSH NOTIFICATIONS</p>
                    <h4>Stay Notified</h4>
                </div>
                <div class="sec2">
                    <span class="red-spot"></span>
                    <div class="wrap1">
                        <figure>
                            <img src="../images/SS Logo Mark.png" />
                        </figure>
                        <p><span>Travis Scott Jordan 1 "Retro High" </span>limited slots now available! Don't miss out
                            because they will sell out fast!</p>
                    </div>
                </div>
                <figure class="home-pic">
                    <img src="../images/Group 226.png" />
                </figure>
            </div>

        </div>
        <div class="footer">
            <div class="container">
                <div class="upper-div">
                    <figure>
                        <img src="../images/solestrike-for-site.png" />
                    </figure>
                    <div class="social-links">
                        <a href="#" class="twitter">
                            <img src="../images/Group 40.png" />
                        </a>
                        <a href="#" class="insta">
                            <img src="../images/Path 63.png" />
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
