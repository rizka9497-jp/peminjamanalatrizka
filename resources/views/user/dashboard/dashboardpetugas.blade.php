@extends('layouts.appuser')

@section('title', 'Dashboard Petugas')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h1 class="mb-4">
            Dashboard Petugas
        </h1>
    </div>
</div>

<section class="content">
<div class="container-fluid">

    <div class="row">

        <div class="col-lg-4 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalalat }}</h3>
                    <p>Total Alat</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tools"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalpeminjaman }}</h3>
                    <p>Total Peminjaman</p>
                </div>
                <div class="icon">
                    <i class="fas fa-book"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $totalpengembalian }}</h3>
                    <p>Total Pengembalian</p>
                </div>
                <div class="icon">
                    <i class="fas fa-undo"></i>
                </div>
            </div>
        </div>

    </div>

</div>
</section>

@endsection