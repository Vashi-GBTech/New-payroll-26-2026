<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    public function dashboard(Request $request) {
        // dd(Auth::user());
        return view('admin.dashboard');
    }


    public function notification(Request $request) {
        return view('admin.dashboard');
    }
}
