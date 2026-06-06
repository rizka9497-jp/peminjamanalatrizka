@extends('layouts.app')

@section('title', 'Data Alat')

@section('content')

<div class="container-fluid">

    <!-- HEADER -->
    <div class="row mb-3">
        <div class="col-md-6">
            <h3 class="font-weight-bold">
                <i class="fas fa-toolbox text-primary"></i>
                Data Alat
            </h3>
        </div>

        <div class="col-md-6 text-right">
            <a href="{{ url('/admin/alats/create') }}"
               class="btn btn-success">
                <i class="fas fa-plus"></i>
                Tambah Alat
            </a>
        </div>
    </div>

    <!-- CARD -->
    <div class="card card-primary card-outline shadow">

        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-list"></i>
                Daftar Alat Sekolah
            </h3>
        </div>

        <div class="card-body table-responsive p-0">

            <table class="table table-bordered table-hover text-nowrap">

                <thead class="bg-primary">
                    <tr>
                        <th class="text-center" width="80">Foto</th>
                        <th>Nama Alat</th>
                        <th>Kategori</th>
                        <th class="text-center">Stok</th>
                        <th>Kondisi</th>
                        <th>Status</th>
                        <th class="text-center" width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($alats as $alat)

                    <tr>

                        <!-- FOTO -->
                        <td class="text-center">

                            @if($alat->foto)

                                <img
                                    src="{{ asset('foto_alat/'.$alat->foto) }}"
                                    alt="{{ $alat->nama_alat }}"
                                    width="60"
                                    height="60"
                                    style="
                                        object-fit:cover;
                                        border-radius:10px;
                                        border:1px solid #ddd;
                                    ">

                            @else

                                <img
                                    src="{{ asset('foto_alat/default.png') }}"
                                    width="60"
                                    height="60"
                                    style="
                                        object-fit:cover;
                                        border-radius:10px;
                                    ">

                            @endif

                        </td>

                        <!-- NAMA -->
                        <td class="align-middle">
                            <strong>{{ $alat->nama_alat }}</strong>
                        </td>

                        <!-- KATEGORI -->
                        <td class="align-middle">
                            {{ $alat->kategori->nama_kategori ?? '-' }}
                        </td>

                        <!-- STOK -->
                        <td class="text-center align-middle">

                            @if($alat->stok > 10)

                                <span class="badge badge-success">
                                    {{ $alat->stok }}
                                </span>

                            @elseif($alat->stok > 5)

                                <span class="badge badge-warning">
                                    {{ $alat->stok }}
                                </span>

                            @else

                                <span class="badge badge-danger">
                                    {{ $alat->stok }}
                                </span>

                            @endif

                        </td>

                        <!-- KONDISI -->
                        <td class="align-middle">

                            @if($alat->kondisi == 'baik')

                                <span class="badge badge-success">
                                    Baik
                                </span>

                            @elseif($alat->kondisi == 'rusak ringan')

                                <span class="badge badge-warning">
                                    Rusak Ringan
                                </span>

                            @else

                                <span class="badge badge-danger">
                                    Rusak Berat
                                </span>

                            @endif

                        </td>

                        <!-- STATUS -->
                        <td class="align-middle">

                            @if($alat->status == 'tersedia')

                                <span class="badge badge-success">
                                    <i class="fas fa-check-circle"></i>
                                    Tersedia
                                </span>

                            @elseif($alat->status == 'dipinjam')

                                <span class="badge badge-primary">
                                    <i class="fas fa-handshake"></i>
                                    Dipinjam
                                </span>

                            @else

                                <span class="badge badge-danger">
                                    <i class="fas fa-tools"></i>
                                    Maintenance
                                </span>

                            @endif

                        </td>

                        <!-- AKSI -->
                        <td class="text-center align-middle">

                            <a href="{{ url('/admin/alats/'.$alat->id.'/edit') }}"
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>

                            <form action="{{ url('/admin/alats/'.$alat->id) }}"
                                  method="POST"
                                  style="display:inline-block;">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus alat ini?')">

                                    <i class="fas fa-trash"></i>
                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="7" class="text-center p-4">

                            <i class="fas fa-box-open fa-3x text-secondary mb-3"></i>

                            <br>

                            <strong>
                                Belum ada data alat.
                            </strong>

                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="card-footer">

            <strong>Total Data :</strong>

            {{ $alats->count() }} Alat

        </div>

    </div>

</div>

@endsection