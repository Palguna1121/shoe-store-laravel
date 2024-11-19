@extends('template.layouts')

@section('title', 'All Products')

@section('content')

    <!------------------------------ Products------------------------------>

    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default sorting</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by rating</option>
                <option>Short by sale</option>
            </select>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-11.jpg') }}"></a>
                <a href="products-details.html">
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
                <a href="products-details.html"><img src="{{ asset('assets/images/product-2.jpg') }}"></a>
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
                <a href="products-details.html"><img src="{{ asset('assets/images/product-3.jpg') }}"></a>
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
                <a href="products-details.html"><img src="{{ asset('assets/images/product-10.jpg') }}"></a>
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

        <div class="row">
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-5.jpg') }}"></a>
                <h4>Flat Heel Gray Shoes</h4>
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
                <a href="products-details.html"><img src="{{ asset('assets/images/product-3.jpg') }}"></a>
                <h4>Lace-Fastening Black Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$21.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-7.jpg') }}"></a>
                <h4>HRX Men's Cotton Socks</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$09.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-2.jpg') }}"></a>
                <h4>Lace-Up Running Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$35.00</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-7.jpg') }}"></a>
                <h4>HRX Cotton Socks</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$10.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-10.jpg') }}"></a>
                <h4>Flat Lace-Fastening Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$48.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-11.jpg') }}"></a>
                <h4>Loafers Men (Gray)</h4>
                <div class="rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$15.00</p>
            </div>
            <div class="col-4">
                <a href="products-details.html"><img src="{{ asset('assets/images/product-12.jpg') }}"></a>
                <h4>Lace-Fastening White Shoes</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$21.00</p>
            </div>
        </div>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>


@endsection
