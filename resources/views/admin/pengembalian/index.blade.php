@extends('layouts.app')

@section('title', 'Data Pengembalian')

@section('content')

<section class="content-header">
    <div class="container-fluid">

        <h1>
            <i class="fas fa-undo-alt"></i>
            Data Pengembalian Alat
        </h1>

        @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
        @endif

    </div>
</section>

<section class="content">

<div class="container-fluid">

<div class="card card-outline card-success">

<div class="card-header bg-success">
    <h3 class="card-title">Daftar Pengembalian</h3>
</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered table-striped" id="datatable">

<thead>
<tr>
    <th>No</th>
    <th>Peminjam</th>
    <th>Alat</th>
    <th>Tgl Pinjam</th>
    <th>Batas Kembali</th>
    <th>Denda</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>

@forelse($peminjamans as $p)

<tr>
    <td>{{ $loop->iteration }}</td>

    <td>{{ $p->user->nama }}</td>

    <td>
        @foreach($p->details as $detail)
            <div>
                <b>{{ $detail->alat->nama_alat }}</b>
                <small>(x{{ $detail->jumlah }})</small>
            </div>
        @endforeach
    </td>

    <td>
        {{ \Carbon\Carbon::parse($p->tanggal_pinjam)->format('d-m-Y') }}
    </td>

    <td>
        {{ \Carbon\Carbon::parse($p->tanggal_kembali)->format('d-m-Y') }}
    </td>

    <td>
        @if($p->denda > 0)
            <span class="badge badge-danger">
                Rp {{ number_format($p->denda, 0, ',', '.') }}
            </span>
        @else
            <span class="badge badge-success">
                0
            </span>
        @endif
    </td>

    <td>

        <form action="{{ route('pengembalian.store') }}" method="POST">
            @csrf

            <input type="hidden" name="peminjaman_id" value="{{ $p->id }}">

            <div class="mb-2">
                <label>Tanggal Pengembalian</label>
                <input type="date"
                       name="tanggal_kembali"
                       class="form-control"
                       required>
            </div>

            <button class="btn btn-success btn-sm"
                    onclick="return confirm('Proses pengembalian?')">

                <i class="fas fa-check"></i>
                Verifikasi
            </button>

        </form>

    </td>

</tr>

@empty

<tr>
    <td colspan="7" class="text-center">
        Tidak ada data
    </td>
</tr>

@endforelse

</tbody>

</table>

</div>

</div>

</div>

</div>

</section>

@endsection

@push('scripts')
<script>
$(function () {
    $('#datatable').DataTable({
        responsive: true,
        autoWidth: false
    });
});
</script>
@endpush