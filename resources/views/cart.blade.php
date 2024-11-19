@extends('template.layouts')

@section('title', 'Cart')

@section('content')

    <!------------------------------ cart items details ------------------------------>
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            @foreach ($cartItems as $index => $cartItem)
                @php
                    $product = $products[$index]; // Ambil produk yang sesuai berdasarkan index
                @endphp
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="{{ $product->url_image }}" alt="{{ $product->name }}">
                            <div>
                                <p>{{ $product->name }}</p>
                                <small>Price: Rp. {{ number_format($product->price, 0, ',', '.') }}</small><br>
                                <button type="submit">Remove</button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="number" value="{{ $cartItem->qty }}" min="1" />
                    </td>
                    <td>Rp. {{ number_format($product->price * $cartItem->qty, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rp {{ number_format($totalPrice, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rp {{ number_format($tax, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
