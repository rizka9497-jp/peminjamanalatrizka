<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $totalAlat = Alat::count();

        $totalPinjam = Peminjaman::where(
            'user_id',
            auth()->id()
        )->count();

        return view(
            'peminjam.dashboard',
            compact(
                'totalAlat',
                'totalPinjam'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Daftar Alat
    |--------------------------------------------------------------------------
    */

    public function alat()
    {
        $alats = Alat::with('kategori')
            ->latest()
            ->get();

        return view(
            'peminjam.alat.index',
            compact('alats')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Peminjaman Saya
    |--------------------------------------------------------------------------
    */

    public function peminjaman()
    {
        $peminjamans = Peminjaman::where(
            'user_id',
            auth()->id()
        )
        ->with('alat')
        ->latest()
        ->get();

        return view(
            'peminjam.peminjaman.index',
            compact('peminjamans')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Riwayat Saya
    |--------------------------------------------------------------------------
    */

    public function riwayat()
    {
        $riwayat = Peminjaman::where(
            'user_id',
            auth()->id()
        )
        ->with('alat')
        ->latest()
        ->get();

        return view(
            'peminjam.riwayat',
            compact('riwayat')
        );
    }
}