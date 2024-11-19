@extends('template.layouts')

@section('title', 'All Products')

@section('content')

    <!------------------------------ Single product details------------------------------>

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('assets/images/product-11.jpg') }}" width="100%" id="productImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="{{ asset('assets/images/product-11.jpg') }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('assets/images/product-5.jpg') }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('assets/images/product-11.jpg') }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset('assets/images/product-5.jpg') }}" width="100%" class="small-img">
                    </div>
                </div>
            </div>

            <div class="col-2">
                <p>Home / Shoes</p>
                <h1>Downshifter Sports Shoes</h1>
                <h4>$50.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>6<!--Small (s)--></option>
                    <option>7<!--Medium (M)--></option>
                    <option>8<!--Large (L)--></option>
                    <option>9<!--XL--></option>
                    <option>10<!--XXL--></option>
                </select>
                <input type="number" values="1">
                <a href="{{ route('home.cart') }}" class="btn">Add to Cart</a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                    of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
        </div>
    </div>

    <!----------------------------------Title------------------------------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="{{ route('home.product') }}">
                <p>View More</p>
            </a>
        </div>
    </div>

    <!----------------------------------products------------------------------------->
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <a href="{{ route('home.product.detail') }}"><img src="{{ asset('assets/images/product-11.jpg') }}"></a>
                <a href="{{ route('home.product.detail') }}">
                    <h4>Downshifter Sports Shoes</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="{{ route('home.product.detail') }}"><img src="{{ asset('assets/images/product-2.jpg') }}"></a>
                <h4>Lace-Up Running Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$35.00</p>
            </div>
            <div class="col-4">
                <a href="{{ route('home.product.detail') }}"><img src="{{ asset('assets/images/product-3.jpg') }}"></a>
                <h4>Lace Fastening Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$15.00</p>
            </div>
            <div class="col-4">
                <a href="{{ route('home.product.detail') }}"><img src="{{ asset('assets/images/product-10.jpg') }}"></a>
                <h4>Flat Lace-Fastening Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$48.00</p>
            </div>
        </div>
    </div>



@endsection
