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
                <a href="{{ route('login') }}" class="flex-c-m p-lr-10 trans-04">My Account</a>
                <a href="#" class="flex-c-m p-lr-10 trans-04">EN</a>
                <a href="#" class="flex-c-m p-lr-10 trans-04">USD</a>
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

        <li>
            <a href="{{ url('/shoping_cart') }}">Shopping Cart</a>
        </li>
    </ul>
</div>
