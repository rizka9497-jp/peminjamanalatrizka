@extends('layouts.appuser')

@section('content')

<div class="content-header">

    <div class="container-fluid">

        <div class="card">

            <div class="card-header">

                <h3>
                    Detail User
                </h3>

            </div>

            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th>Nama</th>
                        <td>{{ $user->name }}</td>
                    </tr>

                    <tr>
                        <th>Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>

                    <tr>
                        <th>Role</th>
                        <td>{{ $user->role }}</td>
                    </tr>

                </table>

            </div>

            <div class="card-footer">

                <a href="/user" class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </div>

    </div>

</div>

@endsection