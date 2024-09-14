<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // View Dashboard
    public function dashboard(){
        return view('backend.dashboard');
    }
}
