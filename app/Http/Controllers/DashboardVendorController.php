<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardVendorController extends Controller
{
    public function index(){
        return view('dashboard-vendor.dashboard');
    }
}
