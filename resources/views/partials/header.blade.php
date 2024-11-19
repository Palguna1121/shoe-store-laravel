<div class ="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{ route('home.index') }}"><img src="{{ asset('assets/images/logo.png') }}" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('home.product') }}">Products</a></li>

                    <!-- Menampilkan menu Account jika belum login -->
                    @guest
                        <li><a href="{{ route('auth') }}">Account</a></li>
                    @endguest

                    <!-- Menampilkan menu Logout jika sudah login -->
                    @auth
                        <li>
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    style="background:none; border:none; color: inherit; text-decoration: none;">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </nav>
            <a href="{{ route('home.cart') }}"><img src="{{ asset('assets/images/cart.png') }}" width="30px"
                    height="30px"></a>
            <img src="{{ asset('assets/images/menu.png') }}" class="menu-icon" onClick="menutoggle()">
        </div>
        @yield('dashboard-head')
    </div>
</div>
