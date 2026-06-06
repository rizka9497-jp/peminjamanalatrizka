@extends('layouts.app')

@section('title','Edit User')

@section('content')

<div class="card">

    <h2>Edit User</h2>

    <br>

    <form action="/admin/users/{{ $user->id }}"
          method="POST">

        @csrf
        @method('PUT')

        <div style="margin-bottom:15px;">
            <label>Nama</label>
            <br>

            <input
                type="text"
                name="nama"
                value="{{ $user->nama }}"
                style="width:100%;padding:10px;"
            >
        </div>

        <div style="margin-bottom:15px;">
            <label>Username</label>
            <br>

            <input
                type="text"
                name="username"
                value="{{ $user->username }}"
                style="width:100%;padding:10px;"
            >
        </div>

        <div style="margin-bottom:15px;">
            <label>Role</label>
            <br>

            <select
                name="role"
                style="width:100%;padding:10px;"
            >

                <option
                    value="admin"
                    {{ $user->role=='admin'?'selected':'' }}>
                    Admin
                </option>

                <option
                    value="petugas"
                    {{ $user->role=='petugas'?'selected':'' }}>
                    Petugas
                </option>

                <option
                    value="peminjam"
                    {{ $user->role=='peminjam'?'selected':'' }}>
                    Peminjam
                </option>

            </select>

        </div>

        <button type="submit">
            Update
        </button>

    </form>

</div>

@endsection