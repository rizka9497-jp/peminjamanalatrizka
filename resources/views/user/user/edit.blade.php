@extends('layouts.appuser')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="card">

            <div class="card-header">

                <h3>
                    Edit User
                </h3>

            </div>

            <form action="/user/{{ $user->id }}" method="POST">

                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group mb-3">

                        <label>
                            Nama
                        </label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ $user->name }}"
                               required>

                    </div>

                    <div class="form-group mb-3">

                        <label>
                            Username
                        </label>

                        <input type="text"
                               name="username"
                               class="form-control"
                               value="{{ $user->username }}"
                               required>

                    </div>

                    <div class="form-group mb-3">

                        <label>
                            Role
                        </label>

                        <select name="role"
                                class="form-control"
                                required>

                            <option value="admin"
                                {{ $user->role == 'admin' ? 'selected' : '' }}>
                                Admin
                            </option>

                            <option value="petugas"
                                {{ $user->role == 'petugas' ? 'selected' : '' }}>
                                Petugas
                            </option>

                            <option value="peminjam"
                                {{ $user->role == 'peminjam' ? 'selected' : '' }}>
                                Peminjam
                            </option>

                        </select>

                    </div>

                </div>

                <div class="card-footer">

                    <button class="btn btn-warning">
                        Update
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