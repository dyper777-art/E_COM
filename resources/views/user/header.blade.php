<!-- Header -->
<header class="{{ request()->is('/') ? '' : 'header-v4' }}">
    <!-- Header Desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">Help & FAQs</a>

                    @auth
                        <span class="flex-c-m trans-04 p-lr-25">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" class="flex-c-m trans-04 p-lr-25" style="background:none; border:none; cursor:pointer; color:#b2b2b2;">
                                Log out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25">Sign in</a>
                    @endauth

                    <a href="#" class="flex-c-m trans-04 p-lr-25">EN</a>
                </div>
            </div>
        </div>

        <!-- Main Menu Desktop -->
        <div class="wrap-menu-desktop {{ request()->is('/') ? '' : 'how-shadow1' }}">
            <nav class="limiter-menu-desktop container">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('user/images/icons/logo-01.png') }}" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="{{ Request::is('/') ? 'active-menu' : '' }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="{{ Request::is('product') ? 'active-menu' : '' }}">
                            <a href="{{ url('/product') }}">Shop</a>
                        </li>
                        <li class="label1 {{ Request::is('shoping_cart') ? 'active-menu' : '' }}" data-label1="hot">
                            <a href="{{ url('/shoping_cart') }}">Features</a>
                        </li>
                        <li class="{{ Request::is('blog') ? 'active-menu' : '' }}">
                            <a href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li class="{{ Request::is('about') ? 'active-menu' : '' }}">
                            <a href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="{{ Request::is('contact') ? 'active-menu' : '' }}">
                            <a href="{{ url('/contact') }}">Contact</a>
                        </li>
                        <li class="{{ Request::is('shoping_cart') ? 'active-menu' : '' }}">
                            <a href="{{ url('/shoping_cart') }}">Shopping Cart</a>
                        </li>
                    </ul>
                </div>

                <!-- Header Icons -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{ session('cart_count', 0) }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo Mobile -->
        <div class="logo-mobile">
            <a href="{{ url('/') }}"><img src="{{ asset('user/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
        </div>

        <!-- Icons Mobile -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="{{ session('cart_count', 0) }}">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <!-- Button Show Menu Mobile -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>
            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">Help & FAQs</a>
                    @auth
                        <span class="flex-c-m p-lr-10 trans-04">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" class="flex-c-m trans-04 p-lr-10" style="background:none; border:none; cursor:pointer; color:#b2b2b2;">Log out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="flex-c-m p-lr-10 trans-04">Sign in</a>
                    @endauth
                    <a href="#" class="flex-c-m p-lr-10 trans-04">EN</a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('/product') }}">Shop</a>
            </li>
            <li>
                <a href="{{ url('/shoping_cart') }}" class="label1 rs1" data-label1="hot">Features</a>
            </li>
            <li>
                <a href="{{ url('/blog') }}">Blog</a>
            </li>
            <li>
                <a href="{{ url('/about') }}">About</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{ asset('user/images/icons/icon-close2.png') }}" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15" action="{{ url('/product') }}" method="GET">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
