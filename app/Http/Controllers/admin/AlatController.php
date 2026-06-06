<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::with('kategori')->latest()->get();

        return view('admin.alat.index', compact('alats'));
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('admin.alat.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_alat' => 'required',
            'stok' => 'required|numeric'
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {

            $foto = time().'.'.$request->foto->extension();

            $request->foto->move(
                public_path('foto_alat'),
                $foto
            );
        }

        Alat::create([
            'kategori_id' => $request->kategori_id,
            'nama_alat'   => $request->nama_alat,
            'stok'        => $request->stok,
            'kondisi'     => $request->kondisi,
            'status'      => $request->status,
            'foto'        => $foto
        ]);

        return redirect('/admin/alats')
            ->with('success','Data alat berhasil ditambahkan');
    }

    public function edit($id)
    {
        $alat = Alat::findOrFail($id);

        $kategoris = Kategori::all();

        return view(
            'admin.alat.edit',
            compact('alat','kategoris')
        );
    }

    public function update(Request $request, $id)
    {
        $alat = Alat::findOrFail($id);

        $foto = $alat->foto;

        if ($request->hasFile('foto')) {

            $foto = time().'.'.$request->foto->extension();

            $request->foto->move(
                public_path('foto_alat'),
                $foto
            );
        }

        $alat->update([
            'kategori_id' => $request->kategori_id,
            'nama_alat'   => $request->nama_alat,
            'stok'        => $request->stok,
            'kondisi'     => $request->kondisi,
            'status'      => $request->status,
            'foto'        => $foto
        ]);

        return redirect('/admin/alats')
            ->with('success','Data alat berhasil diupdate');
    }

    public function destroy($id)
    {
        Alat::destroy($id);

        return redirect('/admin/alats')
            ->with('success','Data alat berhasil dihapus');
    }

    /*
    |--------------------------------------------------------------------------
    | UNTUK DASHBOARD PEMINJAM
    |--------------------------------------------------------------------------
    */

    public function daftarAlat()
    {
        $alats = Alat::with('kategori')
                    ->where('status','tersedia')
                    ->get();

        return view(
            'peminjam.alat',
            compact('alats')
        );
    }
}