<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $travelPackages = TravelPackage::count();
        $transactions = Transaction::count();
        $pending = Transaction::where('transaction_status', 'PENDING')->count();
        $success = Transaction::where('transaction_status', 'SUCCESS')->count();

        return view('pages.admin.dashboard.index', compact('travelPackages','transactions','pending','success'));
    }
}
