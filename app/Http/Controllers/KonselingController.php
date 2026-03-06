<?php

namespace App\Http\Controllers;

use App\Models\Konseling;
use App\Models\Gurubk;
use Illuminate\Http\Request;

class KonselingController extends Controller
{
    // =========================
    // INDEX (SEMUA ROLE)
    // =========================
        public function index()
        {
            $user = auth()->user();

            if ($user->role == 'admin') {

                $konselings = Konseling::with(['siswa','gurubk'])
                    ->latest()
                    ->get();

                return view('admin.konseling.index', compact('konselings'));

            } elseif ($user->role == 'gurubk') {

                $konselings = Konseling::with(['siswa'])
                    ->where('gurubks_id', $user->gurubk->id)
                    ->latest()
                    ->get();

                return view('guru-bk.konseling.index', compact('konselings'));

            } else {

                $konselings = Konseling::with(['gurubk'])
                    ->where('siswas_id', $user->siswa->id)
                    ->latest()
                    ->get();

                return view('siswa.konseling.index', compact('konselings'));
            }
        }

    // =========================
    // FORM AJUAN (SISWA)
    // =========================
    public function create()
    {
        $this->authorizeSiswa();

        $gurubk = Gurubk::all();
        return view('siswa.konseling.form', compact('gurubk'));
    }

    // =========================
    // SIMPAN AJUAN (SISWA)
    // =========================
    public function store(Request $request)
    {
        $this->authorizeSiswa();

        $request->validate([
            'gurubks_id' => 'required',
            'tanggal_pengajuan' => 'required|date',
            'kategori_masalah' => 'required',
            'keluhan' => 'required',
            'metode_konseling' => 'required',
        ]);

        Konseling::create([
            'gurubks_id' => $request->gurubks_id,
            'siswas_id' => auth()->user()->siswa->id,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'kategori_masalah' => $request->kategori_masalah,
            'keluhan' => $request->keluhan,
            'status_pengajuan' => 'menunggu',
            'metode_konseling' => $request->metode_konseling,
        ]);

        return redirect()->route('konseling.index')
            ->with('success', 'Pengajuan berhasil dikirim');
    }

    // =========================
    // UPDATE STATUS
    // =========================
    public function updateStatus(Request $request, $id)
    {
        $this->authorizeGuru();

        $konseling = Konseling::findOrFail($id);

        // pastikan konseling ini milik guru yang login
        if ($konseling->gurubks_id != auth()->user()->gurubk->id) {
            abort(403, 'Bukan konseling anda');
        }

        $request->validate([
            'status_pengajuan' => 'required'
        ]);

        $konseling->update([
            'status_pengajuan' => $request->status_pengajuan
        ]);

        return back()->with('success', 'Status berhasil diupdate');
    }

    // =========================
    // PRIVATE HELPER
    // =========================
    private function authorizeSiswa()
    {
        if (auth()->user()->role != 'siswa') {
            abort(403, 'Akses ditolak');
        }
    }

    private function authorizeGuru()
    {
        if (auth()->user()->role != 'gurubk') {
            abort(403, 'Akses ditolak');
        }
    }
}