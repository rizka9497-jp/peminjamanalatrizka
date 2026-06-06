@extends('layouts.app')

@section('title','Edit Alat')

@section('content')

<div class="card">

    <h2 style="margin-bottom:20px">
        Edit Data Alat
    </h2>

    <form
        action="/admin/alats/{{ $alat->id }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')

        <div style="margin-bottom:15px">

            <label>Kategori</label>

            <select
                name="kategori_id"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >

                @foreach($kategoris as $kategori)

                    <option
                        value="{{ $kategori->id }}"
                        {{ $alat->kategori_id == $kategori->id ? 'selected' : '' }}
                    >
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
                value="{{ $alat->nama_alat }}"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >

        </div>

        <div style="margin-bottom:15px">

            <label>Stok</label>

            <input
                type="number"
                name="stok"
                value="{{ $alat->stok }}"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >

        </div>

        <div style="margin-bottom:15px">

            <label>Kondisi</label>

            <select
                name="kondisi"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >

                <option value="baik"
                {{ $alat->kondisi=='baik' ? 'selected' : '' }}>
                    Baik
                </option>

                <option value="rusak"
                {{ $alat->kondisi=='rusak' ? 'selected' : '' }}>
                    Rusak
                </option>

                <option value="perbaikan"
                {{ $alat->kondisi=='perbaikan' ? 'selected' : '' }}>
                    Perbaikan
                </option>

            </select>

        </div>

        <div style="margin-bottom:15px">

            <label>Status</label>

            <select
                name="status"
                style="width:100%;padding:12px;border:1px solid #ddd;border-radius:10px;"
            >

                <option value="tersedia"
                {{ $alat->status=='tersedia' ? 'selected' : '' }}>
                    Tersedia
                </option>

                <option value="dipinjam"
                {{ $alat->status=='dipinjam' ? 'selected' : '' }}>
                    Dipinjam
                </option>

                <option value="rusak"
                {{ $alat->status=='rusak' ? 'selected' : '' }}>
                    Rusak
                </option>

            </select>

        </div>

        @if($alat->foto)

        <div style="margin-bottom:15px">

            <label>Foto Saat Ini</label>

            <br><br>

            <img
                src="/foto_alat/{{ $alat->foto }}"
                width="150"
                style="border-radius:10px"
            >

        </div>

        @endif

        <div style="margin-bottom:20px">

            <label>Ganti Foto</label>

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
            "
        >
            Update Data
        </button>

    </form>

</div>

@endsection