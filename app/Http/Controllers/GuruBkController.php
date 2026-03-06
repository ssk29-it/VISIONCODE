<?php

namespace App\Http\Controllers;

use App\Models\Gurubk;
use Illuminate\Http\Request;

class GurubkController extends Controller
{
        public function index(Request $request)
        {
            $query = Gurubk::query();

            // FILTER JK
            if ($request->jk) {
                $query->where('jk', $request->jk);
            }

            // SEARCH
            if ($request->search) {
                $query->where(function ($q) use ($request) {
                    $q->where('nama_gurubk', 'like', '%' . $request->search . '%')
                    ->orWhere('nip', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
                });
            }

            $gurubk = $query->get();
            $totalGuruBk = $gurubk->count();

            return view('admin.data-guru.index', compact('gurubk', 'totalGuruBk'));
        }
        
    public function create()
    {
        return view('admin.data-guru.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gurubk' => 'required',
            'nip' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'jk' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required'
        ]);

$image = 'default.jpg';

if ($request->hasFile('image')) {
    $image = $request->file('image')->store('gurubk', 'public');
}

Gurubk::create([
    'user_id' => auth()->id(),
    'nama_gurubk' => $request->nama_gurubk,
    'nip' => $request->nip,
    'no_hp' => $request->no_hp,
    'email' => $request->email,
    'jk' => $request->jk,
    'image' => $image,
    'tempat_lahir' => $request->tempat_lahir,
    'tanggal_lahir' => $request->tanggal_lahir,
    'alamat' => $request->alamat,
    'pendidikan_terakhir' => $request->pendidikan_terakhir
]);

        return redirect()->route('data-guru.index')
            ->with('success', 'Data Guru BK berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $gurubk = Gurubk::findOrFail($id);
        return view('admin.data-guru.edit', compact('gurubk'));
    }


public function update(Request $request, $id)
{
    $gurubk = Gurubk::findOrFail($id);

    $request->validate([
        'nama_gurubk' => 'required',
        'nip' => 'required',
        'no_hp' => 'required',
        'email' => 'required|email',
        'jk' => 'required',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'required',
        'pendidikan_terakhir' => 'required'
    ]);

    $data = $request->except('image');

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('gurubk', 'public');
    }

    $gurubk->update($data);

    return redirect()->route('data-guru.index')
        ->with('success', 'Data Guru BK berhasil diupdate!');
}

    // DETAIL
    public function show($id)
{
    $gurubk = \App\Models\Gurubk::findOrFail($id);
    return view('admin.data-guru.detail', compact('gurubk'));
}

    //  HAPUS
    public function destroy($id)
    {
        Gurubk::destroy($id);

        return redirect()->route('data-guru.index')
            ->with('success', 'Data Guru BK berhasil dihapus!');
    }
}