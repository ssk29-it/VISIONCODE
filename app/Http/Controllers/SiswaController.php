<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\WaliKelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
        public function index(Request $request)
        {
            $query = Siswa::query();

            // FILTER KELAS (X, XI, XII)
            if ($request->kelas) {
                $query->where('kelas', 'like', $request->kelas);
            }

            // FILTER JURUSAN
            if ($request->jurusan) {
                $query->where('jurusan', 'like', '% ' . $request->jurusan . ' %');
            }

            // SEARCH
            if ($request->search) {
                $query->where(function ($q) use ($request) {
                    $q->where('nama_siswa', 'like', '%' . $request->search . '%')
                    ->orWhere('nipd', 'like', '%' . $request->search . '%')
                    ->orWhere('kelas', 'like', '%' . $request->search . '%');
                });
            }

            $siswa = $query->get();
            $totalSiswa = $siswa->count();

            return view('admin.data-siswa.index', compact('siswa', 'totalSiswa'));
        }

    public function create()
    {
        $walikelas = WaliKelas::all(); // buat dropdown
        return view('admin.data-siswa.tambah', compact('walikelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'walikelas_id' => 'required|exists:walikelas,id',
            'nama_siswa' => 'required',
            'nipd' => 'required|string|unique:siswas,nipd',
            'kelas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jk' => 'required|in:L,P',
        ]);

        Siswa::create([
    'user_id' => auth()->id(), 
    'walikelas_id' => $request->walikelas_id,
    'nama_siswa' => $request->nama_siswa,
    'nipd' => $request->nipd,
    'kelas' => $request->kelas,
    'jurusan' => $request->jurusan,
    'jk' => $request->jk,
    'tempat_lahir' => $request->tempat_lahir,
    'tanggal_lahir' => $request->tanggal_lahir,
    'email' => $request->email,
    'no_hp' => $request->no_hp,
    'alamat' => $request->alamat,
]);

        return redirect()->route('data-siswa.index')
            ->with('success', 'Data Siswa berhasil ditambahkan!');
    }

        public function edit($id)
        {
            $siswa = Siswa::findOrFail($id);
            $walikelas = WaliKelas::all();

            return view('admin.data-siswa.edit', compact('siswa', 'walikelas'));
        }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'walikelas_id' => 'required|exists:walikelas,id',
            'nama_siswa' => 'required',
            'nipd' => 'required|unique:siswas,nipd,' . $id,
            'kelas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jk' => 'required|in:L,P',
        ]);

        $siswa->update([
            'walikelas_id' => $request->walikelas_id,
            'nama_siswa' => $request->nama_siswa,
            'nipd' => $request->nipd,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
        ]);

        return redirect()->route('data-siswa.index')
            ->with('success', 'Data Siswa berhasil diupdate!');
    }

    public function show($id)
    {
        $siswa = Siswa::with('walikelas')->findOrFail($id);
        return view('admin.data-siswa.detail', compact('siswa'));
    }

    public function destroy($id)
    {
        Siswa::destroy($id);

        return redirect()->route('data-siswa.index')
            ->with('success', 'Data Siswa berhasil dihapus!');
    }
}