<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        return view('tampilan.home');
        
    }

    public function tentang()
    {
        return view('tampilan.tentang');
    }

    public function materi()
    {
        return view('tampilan.materi');
    }

    public function informasi()
    {
        return view('tampilan.informasi');
    }
}

