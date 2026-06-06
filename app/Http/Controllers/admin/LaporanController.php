<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;

class LaporanController extends Controller
{
    public function index()
    {
       $peminjamans = Peminjaman::with(
    'user',
    'details.alat'
    )->latest()->get();

        return view(
            'admin.laporan.index',
            compact('peminjamans')
        );
    }
}