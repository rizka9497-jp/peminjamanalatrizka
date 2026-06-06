@extends('layouts.app')

@section('title','Dashboard Peminjam')

@section('content')

<div class="container-fluid">

    <!-- WELCOME CARD -->
    <div class="card border-0 shadow-lg mb-4 welcome-card">
        <div class="card-body p-4">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="fw-bold text-white mb-2">
                        👋 Selamat Datang,
                        {{ auth()->user()->nama }}
                    </h2>

                    <p class="text-white mb-0">
                        Selamat datang di Sistem Peminjaman Alat.
                        Silakan lakukan peminjaman alat sesuai kebutuhan Anda.
                    </p>

                </div>

                <div class="col-md-4 text-center">

                    <i class="fas fa-user-circle welcome-icon"></i>

                </div>

            </div>

        </div>
    </div>

    <!-- CARD STATISTIK -->
    <div class="row">

        <!-- TOTAL ALAT -->
        <div class="col-md-6 mb-4">

            <a href="/peminjam/alat"
               class="text-decoration-none">

                <div class="card border-0 shadow-lg statistik-card alat-card">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <h6 class="text-white text-uppercase mb-2">
                                    Total Alat
                                </h6>

                                <h1 class="fw-bold text-white">
                                    {{ $totalAlat }}
                                </h1>

                            </div>

                            <div>

                                <i class="fas fa-toolbox statistik-icon"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </a>

        </div>

        <!-- PEMINJAMAN -->
        <div class="col-md-6 mb-4">

            <a href="/peminjam/peminjaman"
               class="text-decoration-none">

                <div class="card border-0 shadow-lg statistik-card pinjam-card">

                    <div class="card-body">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <h6 class="text-white text-uppercase mb-2">
                                    Peminjaman Saya
                                </h6>

                                <h1 class="fw-bold text-white">
                                    {{ $totalPinjam }}
                                </h1>

                            </div>

                            <div>

                                <i class="fas fa-file-signature statistik-icon"></i>

                            </div>

                        </div>

                    </div>

                </div>

            </a>

        </div>

    </div>

    <!-- INFO -->
    <div class="card border-0 shadow-lg">

        <div class="card-body text-center p-5">

            <i class="fas fa-hand-holding-heart fa-4x text-primary mb-3"></i>

            <h4 class="fw-bold">
                Sistem Peminjaman Alat
            </h4>

            <p class="text-muted">

                Gunakan menu yang tersedia untuk melakukan peminjaman alat,
                melihat status peminjaman, serta riwayat transaksi Anda.

            </p>

        </div>

    </div>

</div>

<style>

.welcome-card{
    border-radius:20px;
    background:linear-gradient(135deg,#667eea,#764ba2);
}

.welcome-icon{
    font-size:90px;
    color:white;
    opacity:.8;
}

.statistik-card{
    border-radius:20px;
    transition:.3s;
    overflow:hidden;
}

.statistik-card:hover{
    transform:translateY(-5px);
}

.alat-card{
    background:linear-gradient(135deg,#36d1dc,#5b86e5);
}

.pinjam-card{
    background:linear-gradient(135deg,#ff9966,#ff5e62);
}

.statistik-icon{
    font-size:60px;
    color:rgba(255,255,255,.8);
}

</style>

@endsection