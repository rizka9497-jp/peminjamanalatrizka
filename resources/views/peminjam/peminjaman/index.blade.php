@extends('layouts.app')

@section('title','Peminjaman Saya')

@section('content')

<div class="card" style="
    border: 3px solid #000000;
    border-radius: 20px;
    padding: 30px;
    background-color: #ffffff;
    box-shadow: 5px 5px 0px #000000;
    margin: 20px;
">

    <div style="
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
    ">
        <div>
            <h2 style="font-weight: bold; color: #000000; margin: 0;">
                Pengajuan Peminjaman Saya
            </h2>
        </div>
    </div>

    <table width="100%" style="
    border-collapse:collapse;
    border: 2px solid #000000;
    background-color: #f9f9f9;
    ">

        <thead>
            <tr style="
            background: #7c3aed;
            color: white;
            border-bottom: 2px solid #000000;
            ">
                <th style="padding:15px;">Daftar Alat</th>
                <th style="padding:15px;">Tgl Pinjam</th>
                <th style="padding:15px;">Tgl Kembali</th>
                <th style="padding:15px;">Status</th>
            </tr>
        </thead>

        <tbody>

        @forelse($peminjamans as $p)

            <tr>

                <td style="padding:15px;">

                    @foreach($p->details as $detail)

                        • {{ $detail->alat->nama_alat }}
                        ({{ $detail->jumlah }})

                        <br>

                    @endforeach

                </td>

                <td align="center">
                    {{ $p->tanggal_pinjam }}
                </td>

                <td align="center">
                    {{ $p->tanggal_kembali }}
                </td>

                <td align="center">

                    @if($p->status == 'approved')

                        <span style="
                        background:#dcfce7;
                        color:#166534;
                        padding:6px 14px;
                        border-radius:20px;
                        ">
                            Approved
                        </span>

                    @elseif($p->status == 'pending')

                        <span style="
                        background:#fef3c7;
                        color:#92400e;
                        padding:6px 14px;
                        border-radius:20px;
                        ">
                            Pending
                        </span>

                    @else

                        <span style="
                        background:#fee2e2;
                        color:#991b1b;
                        padding:6px 14px;
                        border-radius:20px;
                        ">
                            Rejected
                        </span>

                    @endif

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="4" align="center">
                    Belum ada data peminjaman
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection