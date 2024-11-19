@extends('template.layouts')

@section('title', 'Account')

@section('content')

    <!------------------------------ account-page details------------------------------>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('assets/images/image1.png') }}" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="LoginForm" action="{{ route('auth.login') }}" method="post">
                            @csrf
                            <input type="email" name="email" placeholder="email">
                            <input type="password" name="password" placeholder="password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot password</a>
                        </form>

                        <form id="RegForm" action="{{ route('auth.register') }}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="name">
                            <input type="email" name="email" placeholder="email">
                            <input type="password" name="password" placeholder="password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')

    <!-----------------------------------js for toggle menu-------------------------------------->
    <script>
        var menuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-----------------------------------js for toggle form-------------------------------------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)"
        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }
    </script>

@endsection
