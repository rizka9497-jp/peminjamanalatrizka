@extends('layouts.apppeminjam')

@section('title', 'Dashboard Peminjam')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h1 class="mb-4">
            Dashboard Peminjam
        </h1>
    </div>
</div>

<section class="content">
<div class="container-fluid">

    <div class="small-box bg-primary">
        <div class="inner">
            <h3>{{ $totalpeminjaman }}</h3>
            <p>Total Peminjaman Saya</p>
        </div>

        <div class="icon">
            <i class="fas fa-book"></i>
        </div>
    </div>

</div>
</section>

@endsection