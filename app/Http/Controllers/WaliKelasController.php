<?php

namespace App\Http\Controllers;

use App\Models\WaliKelas;
use Illuminate\Http\Request;

class WaliKelasController extends Controller
{
        public function index(Request $request)
        {
            $query = WaliKelas::query();

            // FILTER JK
            if ($request->jk) {
                $query->where('jk', $request->jk);
            }

            // SEARCH
            if ($request->search) {
                $query->where(function ($q) use ($request) {
                    $q->where('nama_guru', 'like', '%' . $request->search . '%')
                    ->orWhere('nip', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
                });
            }

            $walikelas = $query->get();
            $totalWaliKelas = $walikelas->count();

            return view('admin.data-wali-kelas.index', compact('walikelas', 'totalWaliKelas'));
        }

    public function create()
    {
        return view('admin.data-wali-kelas.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'jk' => 'required'
        ]);

$image = 'default.jpg';

if ($request->hasFile('image')) {
    $image = $request->file('image')->store('walikelas', 'public');
}

        WaliKelas::create([
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'image' => $image,
            'jk' => $request->jk
        ]);

        return redirect()->route('data-wali-kelas.index')
            ->with('success', 'Data Wali Kelas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $walikelas = WaliKelas::findOrFail($id);
        return view('admin.data-wali-kelas.edit', compact('walikelas'));
    }


public function update(Request $request, $id)
{
    $walikelas = WaliKelas::findOrFail($id);

    $request->validate([
        'nama_guru' => 'required',
        'nip' => 'required',
        'no_hp' => 'required',
        'email' => 'required|email',
        'alamat' => 'required',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'jk' => 'required'
    ]);

    $data = $request->except('image');

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('walikelas', 'public');
    }


    $walikelas->update($data);

    return redirect()->route('data-wali-kelas.index')
        ->with('success', 'Data Wali Kelas berhasil diupdate!');
}

    // DETAIL
    public function show($id)
{
    $walikelas = \App\Models\WaliKelas::findOrFail($id);
    return view('admin.data-wali-kelas.detail', compact('walikelas'));
}

    //  HAPUS
    public function destroy($id)
    {
        WaliKelas::destroy($id);

        return redirect()->route('data-wali-kelas.index')
            ->with('success', 'Data Wali Kelas berhasil dihapus!');
    }
}