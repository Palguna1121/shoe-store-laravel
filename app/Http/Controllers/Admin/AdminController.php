<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        if (Auth::user()->role_id !== 1 || Auth::user()->role_id === null || Auth::user() === null) {
            abort(403, 'You are not admin');
        }
    }
    public function index()
    {
        return view('admin.dashboard');
    }
}
