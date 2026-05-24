@extends('layouts.appuser')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="card">

            <div class="card-header">

                <h3>
                    Tambah User
                </h3>

            </div>

            <form action="/user" method="POST">

                @csrf

                <div class="card-body">

                    <div class="form-group mb-3">

                        <label>
                            Nama
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               required>

                    </div>

                    <div class="form-group mb-3">

                        <label>
                            Username
                        </label>

                        <input type="text"
                               name="username"
                               class="form-control"
                               required>

                    </div>

                    <div class="form-group mb-3">

                        <label>
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               required>

                    </div>

                    <div class="form-group mb-3">

                        <label>
                            Role
                        </label>

                        <select name="role"
                                class="form-control"
                                required>

                            <option value="">
                                -- Pilih Role --
                            </option>

                            <option value="admin">
                                Admin
                            </option>

                            <option value="petugas">
                                Petugas
                            </option>

                            <option value="peminjam">
                                Peminjam
                            </option>

                        </select>

                    </div>

                </div>

                <div class="card-footer">

                    <button class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="/user" class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection