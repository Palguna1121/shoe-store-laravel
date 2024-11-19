<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\User;
use App\Models\Product;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('dashboard', compact('product'));
    }

    public function product()
    {
        $product = Product::all();

        return view('product', compact('product'));
    }
    public function productDetail(string $id)
    {
        $details = Product::findOrFail($id);
        $product = Product::all();
        $size = Size::all();
        return view('detail-product', compact('details', 'size', 'product'));
    }

    public function addToCart(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required',
            'size_id' => 'required',
            'qty' => 'required'
        ], [
            'user_id.required' => 'User tidak boleh kosong',
            'size_id.required' => 'Size tidak boleh kosong',
            'qty.required' => 'Qty tidak boleh kosong'
        ]);

        if (Auth::user() === null) {
            return redirect()->route('auth');
        }

        $user_id = Auth::user()->id;

        $addToCart = Pemesanan::create([
            'user_id' => $user_id,
            'product_id' => $id,
            'size_id' => $request->size_id,
            'qty' => $request->qty
        ]);
        if ($addToCart) {
            return redirect()->route('home.index')->with('success', 'Product berhasil ditambahkan');
        }
        return redirect()->route('home.index')->with('error', 'Product gagal ditambahkan');
    }

    public function cart(string $id)
    {
        if (Auth::user() === null) {
            return redirect()->route('auth');
        }
        if ($id == 0) {
            return redirect()->route('auth');
        }

        $cartItems = Pemesanan::where('user_id', $id)->get();
        $products = [];
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $product = Product::find($item->product_id);
            if ($product) {
                $products[] = $product;
                $totalPrice += $product->price * $item->qty;
            }
        }

        $tax = 30000;

        $total = $totalPrice + $tax;

        return view('cart', compact('cartItems', 'products', 'totalPrice', 'tax', 'total'));
    }
}
