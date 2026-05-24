<!-- resources/views/landing/home.blade.php -->

@extends('layouts.apptamu')

@section('title', 'Home')

@section('content')

<!-- HERO -->

<section class="hero-section">

    <div class="container">

        <div class="row">

            <div class="col-md-7">

                <h1 class="hero-title">

                    Sistem Peminjaman Alat Sekolah

                </h1>

                <p class="hero-text mt-4">

                    Aplikasi modern berbasis Laravel 13
                    untuk mempermudah proses peminjaman
                    dan pengembalian alat sekolah.

                </p>

                <a href="/daftaralat"
                   class="btn btn-warning btn-lg mt-3">

                    <i class="fas fa-eye"></i>

                    Lihat Daftar Alat

                </a>

            </div>

        </div>

    </div>

</section>

<!-- FITUR -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title">

                Fitur Aplikasi

            </h2>

            <p>


            </p>

        </div>

        <div class="row">

            <div class="col-md-4">

                <div class="card feature-card shadow">

                    <div class="card-body text-center">

                        <i class="fas fa-box fa-3x text-primary mb-3"></i>

                        <h4>
                            Data Alat
                        </h4>

                        <p>

                            Mengelola seluruh alat sekolah
                            secara digital dan terstruktur.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card feature-card shadow">

                    <div class="card-body text-center">

                        <i class="fas fa-exchange-alt fa-3x text-success mb-3"></i>

                        <h4>
                            Peminjaman
                        </h4>

                        <p>

                            Mempermudah proses pengajuan
                            peminjaman alat.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card feature-card shadow">

                    <div class="card-body text-center">

                        <i class="fas fa-chart-bar fa-3x text-danger mb-3"></i>

                        <h4>
                            Laporan
                        </h4>

                        <p>

                            Monitoring data peminjaman
                            dan pengembalian alat.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection