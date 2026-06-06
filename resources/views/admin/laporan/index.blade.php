@extends('layouts.app')

@section('title','Laporan Peminjaman')

@section('content')

<div class="card card-primary card-outline">

    <div class="card-header">

        <h3 class="card-title">
            <i class="fas fa-file-alt"></i>
            Laporan Data Peminjaman
        </h3>

        <div class="card-tools">

            <button
                onclick="window.print()"
                class="btn btn-success btn-sm">

                <i class="fas fa-print"></i>
                Cetak Laporan

            </button>

        </div>

    </div>

    <div class="card-body table-responsive">

        <table class="table table-bordered table-striped">

            <thead class="bg-primary">

            <tr>

                <th width="50">No</th>
                <th>Peminjam</th>
                <th>Daftar Alat</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Total Item</th>
                <th>Status</th>

            </tr>

            </thead>

            <tbody>

            @forelse($peminjamans as $p)

                <tr>

                    <td class="text-center">
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $p->user->nama }}
                    </td>

                    <td>

                        @foreach($p->details as $detail)

                            <div>
                                • {{ $detail->alat->nama_alat }}
                                ({{ $detail->jumlah }})
                            </div>

                        @endforeach

                    </td>

                    <td>
                        {{ date('d-m-Y', strtotime($p->tanggal_pinjam)) }}
                    </td>

                    <td>
                        {{ date('d-m-Y', strtotime($p->tanggal_kembali)) }}
                    </td>

                    <td class="text-center">

                        <strong>
                            {{ $p->details->sum('jumlah') }}
                        </strong>

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

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center">

                        <div class="alert alert-warning mb-0">

                            Belum ada data laporan peminjaman

                        </div>

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="card-footer">

        <strong>Total Data :</strong>
        {{ $peminjamans->count() }} Transaksi

    </div>

</div>

@endsection