@extends('template.layouts')

@section('title', 'All Products')

@section('content')

    <!------------------------------ Products------------------------------>

    <div class="small-container">
        {{-- <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default sorting</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by rating</option>
                <option>Short by sale</option>
            </select>
        </div> --}}

        <div class="row">
            @foreach ($product as $item)
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

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>


@endsection
