@extends('template.layouts')

@section('title', 'All Products')

@section('content')

    <!------------------------------ Single product details------------------------------>

    <form action="{{ route('cart.store', ['id' => $details->id]) }}" method="post" class="small-container single-product">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-2">
                <img src="{{ $details->url_image }}" width="100%" id="productImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="{{ $details->url_image }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ $details->url_image }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ $details->url_image }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ $details->url_image }}" width="100%" class="small-img">
                    </div>
                </div>
            </div>

            <div class="col-2">
                <p>Home / Shoes</p>
                <h1>{{ $details->name }}</h1>
                <h4>Rp. {{ $details->price }}</h4>
                <select required name="size_id">
                    <option value="" disabled selected>Select Size</option>
                    @foreach ($size as $s)
                        <option value="{{ $s->id }}">{{ $s->size }}</option>
                    @endforeach
                </select>
                <input required type="number" name="qty" values="1">

                {{-- hiden input for user id --}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                {{-- hiden input for product id --}}
                <input type="hidden" name="product_id" value="{{ $details->id }}">


                <button type="submit" class="btn">Add to Cart</button>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>{{ $details->description }}</p>
            </div>
        </div>
    </form>

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
            @foreach ($product->take(8) as $item)
                <div class="col-4">
                    <a href="{{ route('home.product.detail', ['id' => $item->id]) }}"><img
                            src="{{ $item->url_image }}"></a>
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



@endsection
