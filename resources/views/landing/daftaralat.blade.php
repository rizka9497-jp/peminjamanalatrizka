@extends('layouts.apptamu')

@section('title', 'Daftar Alat')

@section('content')

<div class="card">

    <div class="card-header bg-info">

        <h3 class="card-title">
            Daftar Alat
        </h3>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>

                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama Alat</th>
                    <th>Stok</th>
                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

                @foreach($alat as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>
                        {{ $item->kategori->nama_kategori }}
                    </td>

                    <td>
                        {{ $item->nama_alat }}
                    </td>

                    <td>
                        {{ $item->stok }}
                    </td>

                    <td>
                        {{ $item->status }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection