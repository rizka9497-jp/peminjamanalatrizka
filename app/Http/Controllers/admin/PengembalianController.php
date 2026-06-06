<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Carbon\Carbon;

class PengembalianController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::with(['user', 'details.alat'])
            ->latest()
            ->get();

        return view('admin.pengembalian.index', compact('peminjamans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'peminjaman_id'   => 'required|exists:peminjamans,id',
            'tanggal_kembali' => 'required|date',
        ]);

        $peminjaman = Peminjaman::findOrFail($request->peminjaman_id);

        // batas pengembalian
        $batas = Carbon::parse($peminjaman->tanggal_kembali);

        // tanggal aktual pengembalian
        $kembali = Carbon::parse($request->tanggal_kembali);

        $denda = 0;
        $keterlambatan = 0;

        // hitung denda
        if ($kembali->greaterThan($batas)) {

            $keterlambatan = $batas->diffInDays($kembali);

            $denda = $keterlambatan * 5000;
        }

        // update data
        $peminjaman->update([
            'tanggal_kembali' => $request->tanggal_kembali,
            'denda'           => $denda,
            'status'          => 'selesai',
        ]);

        return redirect()->back()->with(
            'success',
            'Pengembalian berhasil diproses. '
            . 'Keterlambatan: '
            . $keterlambatan
            . ' hari. Denda: Rp '
            . number_format($denda, 0, ',', '.')
        );
    }
}