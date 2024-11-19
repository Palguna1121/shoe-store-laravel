@extends('template.layouts')

@section('title', 'Dashboard')

@section('dashboard-head')
    <div class="row">
        <div class="col-2">
            <h1>Give your Workout <br>A New Style!</h1>
            <p>Success isn't always about greatness. It's about consistency. Consistent<br>hard work gains
                success. Greatness will come.</p>
            <a href="{{ route('home.product') }}" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="{{ asset('assets/images/image1.png') }}">
        </div>
    </div>
@endsection

@section('content')
    <!------------------------------ featured categories------------------------------>
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('assets/images/category-1.jpg') }}">
                </div>
                <div class="col-3">
                    <img src="{{ asset('assets/images/category-2.jpg') }}">
                </div>
                <div class="col-3">
                    <img src="{{ asset('assets/images/category-3 (2).jpg') }}">
                </div>
            </div>
        </div>
    </div>

    <!------------------------------ featured Products------------------------------>
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            @foreach ($product->take(8) as $item)
                <div class="col-4">
                    <a href="{{ route('home.product.detail', ['id' => $item->id]) }}"><img src="{{ $item->url_image }}"></a>
                    <a href="{{ route('home.product.detail', ['id' => $item->id]) }}">
                        <h4>{{ $item->name }}</h4>
                    </a>
                    <div class="rating">
                        <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rp. {{ $item->price }}</p>
                </div>
            @endforeach
        </div>

    </div>

    <!--------------------------`   offer   --------------------------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('assets/images/image1.png') }}" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on RedStore</p>
                    <h1>Sports Shoes</h1>
                    <small> Buy latest collections of sports shoes online on Redstore at best prices from top brands
                        such as Adidas, Nike, Puma, Asics, and Sparx at your leisure at best prices. </small><br>
                    <a href="{{ route('home.product') }}" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>



    <!------------------------------Testimonial---------------------------------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="{{ asset('assets/images/user-1.png') }}">
                    <h3>Sean Parkar</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="{{ asset('assets/images/user-2.png') }}">
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="{{ asset('assets/images/user-3.png') }}">
                    <h3>Mabel Joe</h3>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------Brands------------------------------------>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('assets/images/logo-godrej.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/logo-oppo.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/logo-coca-cola.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/logo-paypal.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/logo-philips.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
