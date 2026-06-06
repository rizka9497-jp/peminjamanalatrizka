@extends('layouts.app')

@section('title','Data User')

@section('content')

<div class="content-header">
    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">
                    <i class="fas fa-users"></i>
                    Data User
                </h1>
            </div>

            <div class="col-sm-6 text-right">

                <a href="{{ url('/admin/users/create') }}"
                   class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Tambah User
                </a>

            </div>

        </div>

    </div>
</div>

<section class="content">

    <div class="container-fluid">

        <!-- INFO BOX -->

        <div class="row">

            <div class="col-md-4">

                <div class="info-box bg-primary">

                    <span class="info-box-icon">
                        <i class="fas fa-users"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            Total User
                        </span>

                        <span class="info-box-number">
                            {{ $users->count() }}
                        </span>
                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="info-box bg-success">

                    <span class="info-box-icon">
                        <i class="fas fa-user-shield"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            Admin
                        </span>

                        <span class="info-box-number">
                            {{ $users->where('role','admin')->count() }}
                        </span>
                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="info-box bg-info">

                    <span class="info-box-icon">
                        <i class="fas fa-user"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">
                            Peminjam
                        </span>

                        <span class="info-box-number">
                            {{ $users->where('role','peminjam')->count() }}
                        </span>
                    </div>

                </div>

            </div>

        </div>

        <!-- CARD -->

        <div class="card card-primary card-outline">

            <div class="card-header">

                <h3 class="card-title">
                    <i class="fas fa-table"></i>
                    Daftar User
                </h3>

                <div class="card-tools">

                    <div class="input-group input-group-sm"
                         style="width:250px;">

                        <input type="text"
                               id="searchUser"
                               class="form-control"
                               placeholder="Cari user...">

                        <div class="input-group-append">

                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="card-body table-responsive p-0">

                <table
                    class="table table-bordered table-hover"
                    id="userTable">

                    <thead class="bg-primary">

                    <tr>
                        <th width="60">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th width="150">Role</th>
                        <th width="180">Aksi</th>
                    </tr>

                    </thead>

                    <tbody>

                    @forelse($users as $u)

                        <tr>

                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $u->nama }}
                            </td>

                            <td>
                                {{ $u->username }}
                            </td>

                            <td>

                                @if($u->role=='admin')

                                    <span class="badge badge-danger">
                                        Admin
                                    </span>

                                @elseif($u->role=='petugas')

                                    <span class="badge badge-success">
                                        Petugas
                                    </span>

                                @else

                                    <span class="badge badge-primary">
                                        Peminjam
                                    </span>

                                @endif

                            </td>

                            <td>

                                <a href="{{ url('/admin/users/'.$u->id.'/edit') }}"
                                   class="btn btn-warning btn-sm">

                                    <i class="fas fa-edit"></i>
                                    Edit

                                </a>

                                <form action="{{ url('/admin/users/'.$u->id) }}"
                                      method="POST"
                                      style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus user?')">

                                        <i class="fas fa-trash"></i>
                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5" class="text-center">

                                <div class="alert alert-warning m-3">

                                    <i class="fas fa-info-circle"></i>
                                    Data user belum tersedia

                                </div>

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section>

<script>

document
.getElementById('searchUser')
.addEventListener('keyup', function () {

    let filter =
    this.value.toLowerCase();

    let rows =
    document.querySelectorAll(
        '#userTable tbody tr'
    );

    rows.forEach(function(row){

        let text =
        row.innerText.toLowerCase();

        row.style.display =
        text.includes(filter)
        ? ''
        : 'none';

    });

});

</script>

@endsection