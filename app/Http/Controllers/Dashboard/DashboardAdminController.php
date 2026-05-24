<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\Pengembalian;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $totaluser         = User::count();
        $totalkategori     = Kategori::count();
        $totalalat         = Alat::count();
        $totalpeminjaman   = Peminjaman::count();
        $totalpengembalian = Pengembalian::count();

        return view('user.dashboard.dashboardadmin', compact(
            'totaluser',
            'totalkategori',
            'totalalat',
            'totalpeminjaman',
            'totalpengembalian'
        ));
    }
}