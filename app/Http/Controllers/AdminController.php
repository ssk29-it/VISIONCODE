<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

public function dashboard()
{
    return view('admin.dashboard');
}
    public function dataGuru()
{
    return view('admin.data-guru.index');
}

public function dataSiswa()
{
    return view('admin.data-siswa.index');
}

public function dataWali()
{
    return view('admin.data-wali-kelas.index');
}

public function laporan()
{
    return view('admin.laporan.laporan');
}

public function materi()
{
    return view('admin.materi.materi');
}
}
