@extends('layouts.app')

@section('title','Riwayat Peminjaman')

@section('content')

<div class="card" style="
border:3px solid #000;
border-radius:20px;
padding:30px;
background:#fff;
box-shadow:5px 5px 0 #000;
margin:20px;
">

<h2 style="
margin-bottom:20px;
font-weight:bold;
">
Riwayat Peminjaman Saya
</h2>

<table width="100%" style="
border-collapse:collapse;
border:2px solid #000;
background:#fff;
">

<thead>

<tr style="
background:#7c3aed;
color:white;
">

<th style="
padding:15px;
border-right:2px solid #000;
">
Daftar Alat
</th>

<th style="
padding:15px;
border-right:2px solid #000;
">
Tanggal Pinjam
</th>

<th style="
padding:15px;
border-right:2px solid #000;
">
Tanggal Kembali
</th>

<th style="
padding:15px;
">
Status
</th>

</tr>

</thead>

<tbody>

@forelse($peminjamans as $p)

<tr style="
border-bottom:2px solid #000;
">

<td style="
padding:15px;
border-right:2px solid #000;
vertical-align:top;
">

@foreach($p->details as $detail)

<div style="
padding:5px 0;
">

• {{ $detail->alat->nama_alat }}

({{ $detail->jumlah }})

</div>

@endforeach

</td>

<td style="
padding:15px;
border-right:2px solid #000;
text-align:center;
">

{{ $p->tanggal_pinjam }}

</td>

<td style="
padding:15px;
border-right:2px solid #000;
text-align:center;
">

{{ $p->tanggal_kembali }}

</td>

<td style="
padding:15px;
text-align:center;
">

@if($p->status == 'selesai')

<span style="
background:#dcfce7;
color:#166534;
padding:8px 15px;
border-radius:20px;
font-weight:bold;
">
Selesai </span>

@elseif($p->status == 'rejected')

<span style="
background:#fee2e2;
color:#991b1b;
padding:8px 15px;
border-radius:20px;
font-weight:bold;
">
Rejected </span>

@else

<span style="
background:#fef3c7;
color:#92400e;
padding:8px 15px;
border-radius:20px;
font-weight:bold;
">
{{ ucfirst($p->status) }} </span>

@endif

</td>

</tr>

@empty

<tr>

<td colspan="4" style="
padding:20px;
text-align:center;
font-weight:bold;
">

Belum ada riwayat peminjaman

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

@endsection
