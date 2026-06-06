@extends('layouts.app')

@section('title','Tambah Kategori')

@section('content')

<div class="card">

    <h2>Tambah Kategori</h2>

    <br>

    <form action="/admin/kategori" method="POST">

        @csrf

        <div style="margin-bottom:15px">

            <label>Nama Kategori</label>

            <br><br>

            <input
            type="text"
            name="nama_kategori"
            required
            style="
            width:100%;
            padding:12px;
            border:1px solid #ddd;
            border-radius:10px;
            ">

        </div>

        <div style="margin-bottom:15px">

            <label>Deskripsi</label>

            <br><br>

            <textarea
            name="deskripsi"
            rows="5"
            style="
            width:100%;
            padding:12px;
            border:1px solid #ddd;
            border-radius:10px;
            "></textarea>

        </div>

        <button
        style="
        background:#16a34a;
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