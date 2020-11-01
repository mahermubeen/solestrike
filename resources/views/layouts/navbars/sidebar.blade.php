<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('SS') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Sole Strike') }}</a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('admin') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Profile') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#user-settings" aria-expanded="true">
                    <i class="fab fa-laravel"></i>
                    <span class="nav-link-text">{{ __('User Settings') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="user-settings">
                    <div class="collapse show" id="laravel-examples">
                        <ul class="nav pl-4">
                            <li>
                                <a href="{{ route('users')  }}">
                                    <i class="tim-icons icon-bullet-list-67"></i>
                                    <p>{{ __('All Users') }}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('products') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Products') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('orders') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Orders') }}</p>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('icons')  }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('notifications')  }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('table_list')  }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
