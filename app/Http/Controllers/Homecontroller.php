<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{

    // LOGIN
    public function showLogin()
    {
        return view('login');
    }

        // DASHBOARD
    public function showDashboard()
    {
        return view('dashboardadmin');
    }
}
