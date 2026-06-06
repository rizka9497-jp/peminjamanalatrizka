<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use App\Models\LogActivity;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::with([
            'user',
            'details.alat'
        ])->latest()->get();

        return view(
            'admin.peminjaman.index',
            compact('peminjamans')
        );
    }

    public function approve($id)
    {
        $pinjam = Peminjaman::with([
            'details.alat'
        ])->findOrFail($id);

        foreach ($pinjam->details as $detail) {

            if ($detail->alat->stok < $detail->jumlah) {

                return redirect()
                    ->back()
                    ->with(
                        'error',
                        'Stok '.$detail->alat->nama_alat.' tidak mencukupi'
                    );
            }
        }

        foreach ($pinjam->details as $detail) {

            $detail->alat->update([
                'stok' => $detail->alat->stok - $detail->jumlah
            ]);
        }

        $pinjam->update([
            'status' => 'dipinjam'
        ]);

        LogActivity::create([
            'user_id'   => auth()->id(),
            'aktivitas' => 'Menyetujui transaksi peminjaman ID '.$pinjam->id
        ]);

        return redirect('/admin/peminjamans')
            ->with(
                'success',
                'Peminjaman berhasil disetujui'
            );
    }

    public function reject($id)
    {
        $pinjam = Peminjaman::findOrFail($id);

        $pinjam->update([
            'status' => 'ditolak'
        ]);

        LogActivity::create([
            'user_id'   => auth()->id(),
            'aktivitas' => 'Menolak transaksi peminjaman ID '.$pinjam->id
        ]);

        return redirect('/admin/peminjamans')
            ->with(
                'success',
                'Peminjaman berhasil ditolak'
            );
    }
}