@extends('layouts.appuser')

@section('content')

<section class="content">

    <div class="container-fluid">

        <div class="card">

            <div class="card-header">

                <h3 class="card-title">
                    Data User
                </h3>

                <div class="card-tools">

                    <a href="/user/create"
                       class="btn btn-primary btn-sm">

                        Tambah User

                    </a>

                </div>

            </div>

            <div class="card-body">

                <table class="table table-bordered">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($user as $row)

                        <tr>

                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->username }}</td>
                            <td>{{ $row->role }}</td>

                            <td>

                                <a href="/user/{{ $row->id }}"
                                   class="btn btn-info btn-sm">

                                    Detail

                                </a>

                                <a href="/user/{{ $row->id }}/edit"
                                   class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form action="/user/{{ $row->id }}"
                                      method="POST"
                                      style="display:inline;">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section>

@endsection