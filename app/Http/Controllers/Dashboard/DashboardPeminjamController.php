<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class DashboardPeminjamController extends Controller
{
    public function index()
    {
        $totalpeminjaman = Peminjaman::where('user_id', Auth::id())->count();

        return view('zonapeminjam.dashboard.peminjam', compact(
            'totalpeminjaman'
        ));
    }
}