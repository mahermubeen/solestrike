<div class="section1 user_header_black">
    <div class="container">
        <div class="header">
            <figure id="menu" class="menu-logo">
                <img src="{!! asset('img/open-menu (1).png') !!}" />
            </figure>
            
            <div class="brand-logo-wrapper">
                <a href="/" class="brand-logo">
                    <img src="{!! asset('img/Group 222.png') !!}" />
                </a>
            </div>
            
        
            <div class="options">
                <a href="{{ route('cart') }}" class="cart-logo">
                    <img src="{!! asset('img/Group 2.png') !!}" />
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
    </div>
</div>

