@extends('layouts.app')

@section('title', 'Data Kategori')

@section('content')

@if(session('success'))

<div class="alert alert-success alert-dismissible fade show">

```
{{ session('success') }}

<button type="button"
        class="close"
        data-dismiss="alert">
    <span>&times;</span>
</button>

</div>

@endif

<div class="card card-outline card-dark">

<div class="card-header bg-dark">

    <h3 class="card-title">

        <i class="fas fa-tags"></i>
        Daftar Kategori

    </h3>

    <div class="card-tools">

        <a href="/admin/kategori/create"
           class="btn btn-success btn-sm">

            <i class="fas fa-plus"></i>
            Tambah Kategori

        </a>

    </div>

</div>

<div class="card-body">

    <table id="datatable"
           class="table table-bordered table-hover">

        <thead class="thead-dark">

            <tr>

                <th width="5%">No</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th width="18%">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($kategori as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->nama_kategori }}</td>

                <td>{{ $item->deskripsi }}</td>

                <td>

                    <a href="/admin/kategori/{{ $item->id }}/edit"
                       class="btn btn-warning btn-sm">

                        <i class="fas fa-edit"></i>
                        Edit

                    </a>

                    <form action="/admin/kategori/{{ $item->id }}"
                          method="POST"
                          style="display:inline-block;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus kategori ini?')">

                            <i class="fas fa-trash"></i>
                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="4" class="text-center">

                    Belum ada data kategori

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

</div>

@endsection

@push('scripts')

<script>

$(document).ready(function () {

    $('#datatable').DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            search: "Cari :",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            paginate: {
                previous: "Sebelumnya",
                next: "Berikutnya"
            }
        }
    });

});

</script>

@endpush