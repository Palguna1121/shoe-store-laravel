<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller
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
        $size = Size::all();
        return view('admin.size.index', compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required',
        ], [
            'size.required' => 'Size harus diisi',
        ]);

        $size = Size::create([
            'size' => $request->size,
        ]);

        if ($size) {
            return redirect()->route('size.index')->with('success', 'Size berhasil ditambahkan');
        }

        return redirect()->route('size.index')->with('error', 'Size gagal ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $size = Size::findOrFail($id);
        return view('admin.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $size = Size::findOrFail($id);
        $request->validate(
            [
                'size' => 'required',
            ],
            [
                'size.required' => 'Size harus diisi',
            ]
        );
        $update = $size->update([
            'size' => $request->size,
        ]);
        if ($update) {
            return redirect()->route('size.index')->with('success', 'Size berhasil diperbarui');
        }

        return redirect()->route('size.index')->with('error', 'Size gagal diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::findOrFail($id);
        $delete = $size->delete();
        if ($delete) {
            return redirect()->route('size.index')->with('success', 'Size berhasil dihapus');
        }

        return redirect()->route('size.index')->with('error', 'Size gagal dihapus');
    }
}
