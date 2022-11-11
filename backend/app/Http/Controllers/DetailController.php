<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class DetailController extends Controller
{
    public function index(TravelPackage $travelPackage)
    {
        $travelPackage->load(['galleries']);
        
        return view('pages.detail.index', compact('travelPackage'));
    }
}
