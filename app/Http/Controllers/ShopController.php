<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * To index
     * @return View welcome
     */
    public function index()
    {
        if (Auth::check()) {
            return view('welcome');
        }
        return redirect()->route('auth#login');
    }
}
