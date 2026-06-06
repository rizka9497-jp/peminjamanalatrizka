@extends('layouts.app')

@section('title','Edit Kategori')

@section('content')

<div class="card">

    <h2>Edit Kategori</h2>

    <br>

    <form
    action="/admin/kategori/{{ $kategori->id }}"
    method="POST">

        @csrf
        @method('PUT')

        <div style="margin-bottom:15px">

            <label>Nama Kategori</label>

            <br><br>

            <input
            type="text"
            name="nama_kategori"
            value="{{ $kategori->nama_kategori }}"
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
            ">{{ $kategori->deskripsi }}</textarea>

        </div>

        <button
        style="
        background:#3b82f6;
        color:white;
        border:none;
        padding:12px 20px;
        border-radius:10px;
        ">
            Update
        </button>

    </form>

</div>

@endsection