<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        if (Auth::user() === null || Auth::user()->role_id === null || Auth::user()->role_id !== 1) {
            abort(403, 'You are not admin');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = \App\Models\Product::all();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'url_image' => 'required',
            'qty' => 'required',
        ], [
            'name.required' => 'Product Name harus diisi',
            'description.required' => 'Description harus diisi',
            'price.required' => 'Price harus diisi',
            'url_image.required' => 'URL Image harus diisi',
            'qty.required' => 'Qty harus diisi',
        ]);

        $product = \App\Models\Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'url_image' => $request->url_image,
            'qty' => $request->qty
        ]);

        if ($product) {
            return redirect()->route('product.index')->with('success', 'Product berhasil ditambahkan');
        }

        return redirect()->route('product.index')->with('error', 'Product gagal ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $size = \App\Models\Size::all();
        return view('admin.product.edit', compact('product', 'size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'url_image' => 'required',
            'qty' => 'required',
        ], [
            'name.required' => 'Product Name harus diisi',
            'description.required' => 'Description harus diisi',
            'price.required' => 'Price harus diisi',
            'url_image.required' => 'URL Image harus diisi',
            'qty.required' => 'Qty harus diisi',
        ]);

        $product = \App\Models\Product::findOrFail($id);
        $update = $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'url_image' => $request->url_image,
            'qty' => $request->qty
        ]);

        if ($update) {
            return redirect()->route('product.index')->with('success', 'Product berhasil diperbarui');
        }

        return redirect()->route('product.index')->with('error', 'Product gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = \App\Models\Product::findOrFail($id);

        if ($product->delete()) {
            return redirect()->route('product.index')->with('success', 'Product berhasil dihapus');
        }

        return redirect()->route('product.index')->with('error', 'Product gagal dihapus');
    }
}
