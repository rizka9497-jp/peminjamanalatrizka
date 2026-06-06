<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Alat;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();

        $totalKategori = Kategori::count();

        $totalAlat = Alat::count();

        $totalPeminjaman = Peminjaman::count();

        $totalPeminjam = User::where(
            'role',
            'peminjam'
        )->count();

        $totalPending = Peminjaman::where(
            'status',
            'pending'
        )->count();

        $totalApproved = Peminjaman::where(
            'status',
            'approved'
        )->count();

        $totalSelesai = Peminjaman::where(
            'status',
            'selesai'
        )->count();

        return view(
            'admin.dashboard',
            compact(
                'totalUser',
                'totalKategori',
                'totalAlat',
                'totalPeminjaman',
                'totalPeminjam',
                'totalPending',
                'totalApproved',
                'totalSelesai'
            )
        );
    }
}
