<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Alat;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing.home');
    }

    public function tentang()
    {
        return view('landing.tentang');
    }

    public function kontak()
    {
        return view('landing.kontak');
    }

    public function daftaralat()
    {
        $alat = Alat::with('kategori')->get();

        return view('landing.daftaralat', compact('alat'));
    }
}