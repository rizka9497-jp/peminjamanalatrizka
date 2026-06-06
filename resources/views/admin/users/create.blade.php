@extends('layouts.app')

@section('title','Tambah User')

@section('content')

<div class="card">

    <h2>Tambah User</h2>

    <br>

    <form action="/admin/users" method="POST">

        @csrf

        <div style="margin-bottom:15px;">
            <label>Nama</label>
            <br>
            <input type="text"
                   name="nama"
                   style="width:100%;padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Username</label>
            <br>
            <input type="text"
                   name="username"
                   style="width:100%;padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Password</label>
            <br>
            <input type="password"
                   name="password"
                   style="width:100%;padding:10px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Role</label>
            <br>

            <select name="role"
                    style="width:100%;padding:10px;">

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

        <button type="submit">
            Simpan
        </button>

    </form>

</div>

@endsection