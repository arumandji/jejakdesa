<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('layouts admin.dashboard.dashboard');
    }
}
