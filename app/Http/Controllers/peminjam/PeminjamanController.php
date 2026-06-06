<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\DetailPeminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function alat()
    {
        $alats = Alat::with('kategori')->get();

        return view(
            'peminjam.alat.index',
            compact('alats')
        );
    }

    public function store(Request $request)
    {
        if (!$request->has('alat_id')) {

            return back()->with(
                'error',
                'Pilih minimal 1 alat'
            );
        }

        $peminjaman = Peminjaman::create([

            'user_id' => auth()->id(),

            'tanggal_pinjam' => $request->tanggal_pinjam,

            'tanggal_kembali' => $request->tanggal_kembali,

            'status' => 'pending'
        ]);

        foreach ($request->alat_id as $alatId) {

            $alat = Alat::findOrFail($alatId);

            $jumlah = $request->jumlah[$alatId] ?? 1;

            if ($jumlah > $alat->stok) {

                return back()->with(
                    'error',
                    'Stok '.$alat->nama_alat.' tidak mencukupi'
                );
            }

            DetailPeminjaman::create([

                'peminjaman_id' => $peminjaman->id,

                'alat_id' => $alatId,

                'jumlah' => $jumlah
            ]);
        }

        return back()->with(
            'success',
            'Peminjaman berhasil diajukan'
        );
    }

    public function peminjaman()
    {
        $peminjamans = Peminjaman::with(
            'details.alat'
        )
        ->where('user_id', auth()->id())
        ->whereIn('status', [
            'pending',
            'approved'
        ])
        ->latest()
        ->get();

        return view(
            'peminjam.peminjaman.index',
            compact('peminjamans')
        );
    }

    public function riwayat()
    {
        $peminjamans = Peminjaman::with(
            'details.alat'
        )
        ->where('user_id', auth()->id())
        ->whereIn('status', [
            'rejected',
            'selesai'
        ])
        ->latest()
        ->get();

        return view(
            'peminjam.riwayat',
            compact('peminjamans')
        );
    }
}