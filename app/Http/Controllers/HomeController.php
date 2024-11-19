<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function product()
    {
        return view('product');
    }
    public function productDetail()
    {
        return view('detail-product');
    }

    public function cart()
    {
        return view('cart');
    }
}
