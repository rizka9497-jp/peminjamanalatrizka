<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class DashboardPetugasController extends Controller
{
    public function index()
    {
        $totalalat         = Alat::count();
        $totalpeminjaman   = Peminjaman::count();
        $totalpengembalian = Pengembalian::count();

        return view('user.dashboard.dashboardpetugas', compact(
            'totalalat',
            'totalpeminjaman',
            'totalpengembalian'
        ));
    }
}