@extends('layouts.app')

@section('title','Dashboard Petugas')

@section('content')

<div style="
    display: flex; 
    gap: 20px; 
    flex-wrap: wrap; 
    padding: 20px;
">

    <a href="/petugas/peminjaman" style="
        flex: 1;
        min-width: 220px;
        border: 3px solid #000000;
        border-radius: 15px;
        padding: 20px;
        background-color: #3498db; /* Biru */
        color: #ffffff;
        text-decoration: none;
        box-shadow: 5px 5px 0px #000000;
        transition: transform 0.1s ease;
        display: block;
    " onmouseover="this.style.transform='translate(-2px, -2px)'" onmouseout="this.style.transform='translate(0px, 0px)'">
        <h4 style="margin: 0 0 10px 0; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; opacity: 0.9;">Total Alat</h4>
        <h2 style="margin: 0; font-size: 36px; font-weight: 900; line-height: 1;">{{ $totalAlat }}</h2>
    </a>

    <a href="/petugas/peminjaman" style="
        flex: 1;
        min-width: 220px;
        border: 3px solid #000000;
        border-radius: 15px;
        padding: 20px;
        background-color: #9b59b6; /* Ungu */
        color: #ffffff;
        text-decoration: none;
        box-shadow: 5px 5px 0px #000000;
        transition: transform 0.1s ease;
        display: block;
    " onmouseover="this.style.transform='translate(-2px, -2px)'" onmouseout="this.style.transform='translate(0px, 0px)'">
        <h4 style="margin: 0 0 10px 0; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; opacity: 0.9;">Total Peminjaman</h4>
        <h2 style="margin: 0; font-size: 36px; font-weight: 900; line-height: 1;">{{ $totalPeminjaman }}</h2>
    </a>

    <a href="/petugas/peminjaman" style="
        flex: 1;
        min-width: 220px;
        border: 3px solid #000000;
        border-radius: 15px;
        padding: 20px;
        background-color: #2ecc71; /* Hijau */
        color: #ffffff;
        text-decoration: none;
        box-shadow: 5px 5px 0px #000000;
        transition: transform 0.1s ease;
        display: block;
    " onmouseover="this.style.transform='translate(-2px, -2px)'" onmouseout="this.style.transform='translate(0px, 0px)'">
        <h4 style="margin: 0 0 10px 0; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; opacity: 0.9;">Peminjaman Approved</h4>
        <h2 style="margin: 0; font-size: 36px; font-weight: 900; line-height: 1;">{{ $totalApproved }}</h2>
    </a>

    <a href="/petugas/pengembalian" style="
        flex: 1;
        min-width: 220px;
        border: 3px solid #000000;
        border-radius: 15px;
        padding: 20px;
        background-color: #e67e22; /* Oranye */
        color: #ffffff;
        text-decoration: none;
        box-shadow: 5px 5px 0px #000000;
        transition: transform 0.1s ease;
        display: block;
    " onmouseover="this.style.transform='translate(-2px, -2px)'" onmouseout="this.style.transform='translate(0px, 0px)'">
        <h4 style="margin: 0 0 10px 0; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; opacity: 0.9;">Pengembalian</h4>
        <h2 style="margin: 0; font-size: 36px; font-weight: 900; line-height: 1;">{{ $totalPengembalian }}</h2>
    </a>

</div>

@endsection