<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Galery;
use App\Models\About;
use App\Models\Artikel;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Carousel;
use App\Models\Homegaleri;
use App\Models\ContactInfo;

class HomeController extends Controller
{
    // Halaman utama / home
public function showHomepage()
{
    // Berita paling lama → card besar
    $oldest = News::orderBy('created_at', 'asc')->first();

    // 4 berita setelah si paling lama → card kecil
    $beritas = News::orderBy('created_at', 'asc')
                   ->skip(1) // skip paling lama
                   ->take(4) // ambil 4 berikutnya
                   ->get();
    $tentangs = About::all();
    $homegaleris = Homegaleri::get();
    $kontak = ContactInfo::first();

    return view('home', compact('oldest', 'beritas', 'kontak','tentangs', 'homegaleris'));
}


    // Halaman galeri (ambil data dari DB)
    public function showGaleri()
    {
        $kontak = ContactInfo::first();
        $galeris = Galery::latest()->paginate(12);
        $carousels = Carousel::get();
        return view('galeri', compact('galeris', 'kontak','carousels'));
    }

    // Halaman tentang (ambil data dari DB)
    public function showTentang()
{
    $tentangs = About::all();
    $visis = Visi::all();
    $misis = Misi::all();
    $kontak = ContactInfo::first();
    return view('tentang', compact('tentangs', 'kontak','visis', 'misis'));
}


public function showBerita()
{
    // Semua berita kecuali yang paling lama
    $beritas = News::orderBy('created_at', 'asc')
                   ->skip(1) // lewati 1 berita paling lama
                   ->take(8) // ambil 8, bisa juga ->paginate(8)
                   ->get();

    $artikels = Artikel::all();
    $kontak = ContactInfo::first();

    return view('berita', compact('beritas','artikels', 'kontak'));
}

    // Halaman baca selengkapnya (statik)
 public function showBacaSelengkapnya()
    {
            return view('bacaselengkapnya');
    }


    // Halaman kontak (ambil data dari DB)
    public function showKontak()
    {
        $kontak = ContactInfo::first();
        return view('kontak', compact('kontak') );
    }
}
