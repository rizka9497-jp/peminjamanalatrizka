@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 fw-bold">
                    Dashboard Admin
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="content">

    <div class="container-fluid">

        {{-- WELCOME CARD --}}
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <h4 class="fw-bold">
                    👋 Selamat Datang, {{ auth()->user()->nama }}
                </h4>

                <p class="text-muted mb-0">
                    Kelola seluruh data peminjaman alat sekolah melalui dashboard ini.
                </p>
            </div>
        </div>

        {{-- SMALL BOX --}}
        <div class="row">

            {{-- USER --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $totalUser }}</h3>
                        <p>Total User</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <a href="/admin/users" class="small-box-footer">
                        Lihat Data
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            {{-- ALAT --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $totalAlat }}</h3>
                        <p>Total Alat</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-toolbox"></i>
                    </div>

                    <a href="/admin/alats" class="small-box-footer">
                        Lihat Data
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            {{-- PEMINJAMAN --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $totalPeminjaman }}</h3>
                        <p>Peminjaman Aktif</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-file-signature"></i>
                    </div>

                    <a href="/admin/peminjamans" class="small-box-footer">
                        Lihat Data
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            {{-- PENGEMBALIAN --}}
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $totalPeminjam }}</h3>
                        <p>Pengembalian</p>
                    </div>

                    <div class="icon">
                        <i class="fas fa-rotate-left"></i>
                    </div>

                    <a href="/admin/pengembalian" class="small-box-footer">
                        Lihat Data
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div>

        {{-- INFO BOX --}}
        <div class="row">

            <div class="col-md-4">

                <div class="info-box shadow-sm">
                    <span class="info-box-icon bg-info">
                        <i class="fas fa-layer-group"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            Total Kategori
                        </span>

                        <span class="info-box-number">
                            {{ $totalKategori }}
                        </span>
                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="info-box shadow-sm">
                    <span class="info-box-icon bg-success">
                        <i class="fas fa-chart-line"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            Status Sistem
                        </span>

                        <span class="info-box-number text-success">
                            Aktif
                        </span>
                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <a href="/admin/log-activity" style="text-decoration:none;">
                    <div class="info-box shadow-sm">
                        <span class="info-box-icon bg-warning">
                            <i class="fas fa-clock"></i>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">
                                Log Aktivitas
                            </span>

                            <span class="info-box-number">
                                Lihat Riwayat
                            </span>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        {{-- ALUR PEMINJAMAN --}}
        <div class="card card-primary card-outline">

            <div class="card-header">
                <h3 class="card-title">
                    Alur Peminjaman Alat Sekolah
                </h3>
            </div>

            <div class="card-body">

                <div class="row text-center">

                    <div class="col-md-2">
                        <i class="fas fa-toolbox fa-3x text-primary"></i>
                        <p class="mt-2">Pilih Alat</p>
                    </div>

                    <div class="col-md-2">
                        <i class="fas fa-file-signature fa-3x text-success"></i>
                        <p class="mt-2">Ajukan</p>
                    </div>

                    <div class="col-md-2">
                        <i class="fas fa-user-check fa-3x text-info"></i>
                        <p class="mt-2">Verifikasi</p>
                    </div>

                    <div class="col-md-2">
                        <i class="fas fa-cogs fa-3x text-warning"></i>
                        <p class="mt-2">Digunakan</p>
                    </div>

                    <div class="col-md-2">
                        <i class="fas fa-undo fa-3x text-danger"></i>
                        <p class="mt-2">Kembalikan</p>
                    </div>

                    <div class="col-md-2">
                        <i class="fas fa-check-circle fa-3x text-success"></i>
                        <p class="mt-2">Selesai</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection