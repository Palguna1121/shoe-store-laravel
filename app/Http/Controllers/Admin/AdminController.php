<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        if (Auth::user()->role_id != 1) {
            abort(403);
        }
    }
    public function index()
    {
        return view('admin.dashboard');
    }

    public function product()
    {
        return view('admin.product');
    }
}
