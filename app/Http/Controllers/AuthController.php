<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

if ($role === 'admin') 
    return redirect('/admin')->with('success', 'Login berhasil! Selamat datang!');

if ($role === 'guru_bk') 
    return redirect('/guru_bk')->with('success', 'Login berhasil! Selamat datang Guru BK 🎉');

if ($role === 'siswa') 
    return redirect('/siswa')->with('success', 'Login berhasil! Selamat datang 🎉');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah!',
        ]);
    }

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')
        ->with('success', 'Anda berhasil logout!');
}
}