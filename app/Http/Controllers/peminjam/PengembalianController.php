<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function store($id)
    {
        $pinjam = Peminjaman::findOrFail($id);

        if($pinjam->status != 'dipinjam')
        {
            return back()->with(
                'error',
                'Peminjaman belum bisa dikembalikan'
            );
        }

        Pengembalian::create([

            'peminjaman_id'        => $pinjam->id,
            'tanggal_pengembalian' => now(),
            'keterlambatan'        => 0,
            'denda'                => 0,
            'kondisi_kembali'      => 'baik',
            'status'               => 'pending'

        ]);

        return back()->with(
            'success',
            'Pengajuan pengembalian berhasil'
        );
    }
}