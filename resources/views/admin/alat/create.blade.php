@extends('layouts.app')

@section('title','Tambah Alat')

@section('content')

<div class="card">

    <h2 style="margin-bottom:20px">
        Tambah Data Alat
    </h2>

    <form action="/admin/alats" method="POST" enctype="multipart/form-data">

        @csrf

        <div style="margin-bottom:15px">
            <label>Kategori</label>

            <select
                name="kategori_id"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >
                @foreach($kategoris as $kategori)

                    <option value="{{ $kategori->id }}">
                        {{ $kategori->nama_kategori }}
                    </option>

                @endforeach
            </select>
        </div>

        <div style="margin-bottom:15px">
            <label>Nama Alat</label>

            <input
                type="text"
                name="nama_alat"
                class="form-control"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >
        </div>

        <div style="margin-bottom:15px">
            <label>Stok</label>

            <input
                type="number"
                name="stok"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >
        </div>

        <div style="margin-bottom:15px">
            <label>Kondisi</label>

            <select
                name="kondisi"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >
                <option value="baik">Baik</option>
                <option value="rusak">Rusak</option>
                <option value="perbaikan">Perbaikan</option>
            </select>
        </div>

        <div style="margin-bottom:15px">
            <label>Status</label>

            <select
                name="status"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >
                <option value="tersedia">Tersedia</option>
                <option value="dipinjam">Dipinjam</option>
                <option value="rusak">Rusak</option>
            </select>
        </div>

        <div style="margin-bottom:20px">
            <label>Foto Alat</label>

            <input
                type="file"
                name="foto"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >
        </div>

        <button
            type="submit"
            style="
            background:#7c3aed;
            color:white;
            border:none;
            padding:12px 20px;
            border-radius:10px;
            ">
            Simpan
        </button>

    </form>

</div>

@endsection