<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class HomeController extends Controller
{
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->limit(4)->get();

        return view('pages.home.index', compact('items'));
    }
}
