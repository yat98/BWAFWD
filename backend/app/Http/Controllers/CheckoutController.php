<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('pages.checkout.index');
    }

    public function success()
    {
        return view('pages.success-checkout.index');
    }
}
