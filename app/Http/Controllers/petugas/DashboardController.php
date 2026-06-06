<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAlat = Alat::count();

        $totalPeminjaman = Peminjaman::count();

        $totalApproved = Peminjaman::where(
            'status',
            'approved'
        )->count();

        $totalPengembalian = Pengembalian::count();

        return view(
            'petugas.dashboard',
            compact(
                'totalAlat',
                'totalPeminjaman',
                'totalApproved',
                'totalPengembalian'
            )
        );
    }
}