<div class ="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('home.product') }}">Products</a></li>
                    <li><a href="{{ route('auth.login') }}">Sign in</a></li>

                </ul>
            </nav>
            <a href="cart.html"><img src="{{ asset('assets/images/cart.png') }}" width="30px" height="30px"></a>
            <img src="{{ asset('assets/images/menu.png') }}" class="menu-icon" onClick="menutoggle()">
        </div>
        @yield('dashboard-head')
    </div>
</div>
