@extends('layouts.app')

@section('title', 'Data Peminjaman')

@section('content')

<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">

                <h1>
                    <i class="fas fa-handshake"></i>
                    Data Peminjaman Alat
                </h1>

            </div>

        </div>

        @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button type="button"
                    class="close"
                    data-dismiss="alert">

                <span>&times;</span>

            </button>

        </div>

        @endif

        @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show">

            {{ session('error') }}

            <button type="button"
                    class="close"
                    data-dismiss="alert">

                <span>&times;</span>

            </button>

        </div>

        @endif

    </div>

</section>

<section class="content">

    <div class="container-fluid">

        <div class="card card-outline card-dark">

            <div class="card-header bg-dark">

                <h3 class="card-title">

                    <i class="fas fa-list"></i>
                    Daftar Peminjaman

                </h3>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table id="datatable"
                           class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th width="5%">No</th>
                                <th>Nama Peminjam</th>
                                <th>Daftar Alat</th>
                                <th width="12%">Tanggal Pinjam</th>
                                <th width="12%">Tanggal Kembali</th>
                                <th width="10%">Status</th>
                                <th width="20%">Aksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($peminjamans as $p)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $p->user->nama ?? '-' }}
                                </td>

                                <td>

                                    @if($p->details->count())

                                        @foreach($p->details as $detail)

                                            <div class="mb-2">

                                                <strong>
                                                    {{ $detail->alat->nama_alat ?? '-' }}
                                                </strong>

                                                <br>

                                                <small class="text-muted">

                                                    Jumlah Dipinjam :
                                                    {{ $detail->jumlah }} Unit

                                                </small>

                                            </div>

                                        @endforeach

                                    @else

                                        <span class="text-danger">

                                            Detail alat belum ada

                                        </span>

                                    @endif

                                </td>

                                <td>

                                    {{ \Carbon\Carbon::parse($p->tanggal_pinjam)->format('d-m-Y') }}

                                </td>

                                <td>

                                    {{ \Carbon\Carbon::parse($p->tanggal_kembali)->format('d-m-Y') }}

                                </td>

                                <td>

                                    @if($p->status == 'pending')

                                        <span class="badge badge-warning">
                                            Pending
                                        </span>

                                    @elseif($p->status == 'dipinjam')

                                        <span class="badge badge-primary">
                                            Dipinjam
                                        </span>

                                    @elseif($p->status == 'selesai')

                                        <span class="badge badge-success">
                                            Selesai
                                        </span>

                                    @elseif($p->status == 'ditolak')

                                        <span class="badge badge-danger">
                                            Ditolak
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    @if($p->status == 'pending')

                                        <a href="{{ url('/admin/peminjamans/'.$p->id.'/approve') }}"
                                           class="btn btn-success btn-sm">

                                            <i class="fas fa-check"></i>
                                            Approve

                                        </a>

                                        <a href="{{ url('/admin/peminjamans/'.$p->id.'/reject') }}"
                                           class="btn btn-danger btn-sm">

                                            <i class="fas fa-times"></i>
                                            Reject

                                        </a>

                                    @elseif($p->status == 'dipinjam')

                                        <a href="{{ url('/admin/pengembalian') }}"
                                           class="btn btn-warning btn-sm">

                                            <i class="fas fa-undo"></i>
                                            Pengembalian

                                        </a>

                                    @elseif($p->status == 'selesai')

                                        <span class="badge badge-success">

                                            <i class="fas fa-check-circle"></i>
                                            Sudah Dikembalikan

                                        </span>

                                    @elseif($p->status == 'ditolak')

                                        <span class="badge badge-danger">

                                            <i class="fas fa-times-circle"></i>
                                            Peminjaman Ditolak

                                        </span>

                                    @endif

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="7"
                                    class="text-center">

                                    Belum ada data peminjaman

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
        autoWidth: false,
        pageLength: 10

    });

});

</script>

@endpush