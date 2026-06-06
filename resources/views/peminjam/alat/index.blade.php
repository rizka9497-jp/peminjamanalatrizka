@extends('layouts.app')

@section('title','Daftar Alat')

@section('content')

<div class="card" style="
border:3px solid #000;
border-radius:20px;
padding:30px;
background:white;
box-shadow:5px 5px 0 #000;
margin:20px;
">

<h2 style="margin-bottom:20px;">
Form Peminjaman Alat
</h2>

@if(session('success'))

<div style="
background:#dcfce7;
padding:15px;
margin-bottom:20px;
border-radius:10px;
font-weight:bold;
color:#166534;
">
{{ session('success') }}
</div>
@endif

@if(session('error'))

<div style="
background:#fee2e2;
padding:15px;
margin-bottom:20px;
border-radius:10px;
font-weight:bold;
color:#991b1b;
">
{{ session('error') }}
</div>
@endif

<form action="/peminjam/pinjam" method="POST">

@csrf

<div style="
display:flex;
gap:20px;
margin-bottom:25px;
">

<div>
<label style="font-weight:bold;">
Tanggal Pinjam
</label>

<input
type="date"
name="tanggal_pinjam"
value="{{ date('Y-m-d') }}"
readonly
style="
display:block;
margin-top:5px;
padding:10px;
border:2px solid black;
border-radius:6px;
">

</div>

<div>
<label style="font-weight:bold;">
Tanggal Kembali
</label>

<input
type="date"
name="tanggal_kembali"
value="{{ date('Y-m-d',strtotime('+5 days')) }}"
readonly
style="
display:block;
margin-top:5px;
padding:10px;
border:2px solid black;
border-radius:6px;
">

</div>

</div>

<table width="100%" border="1" cellspacing="0" cellpadding="10">

<thead style="
background:#7c3aed;
color:white;
">

<tr>

<th width="80">
Pilih
</th>

<th width="100">
Foto
</th>

<th>
Nama Alat
</th>

<th>
Kategori
</th>

<th width="80">
Stok
</th>

<th width="120">
Jumlah
</th>

</tr>

</thead>

<tbody>

@foreach($alats as $alat)

<tr>

<td align="center">

<input
type="checkbox"
name="alat_id[]"
value="{{ $alat->id }}"
style="
width:20px;
height:20px;
">

</td>

<td align="center">

@if($alat->foto)

<img
src="/foto_alat/{{ $alat->foto }}"
width="70"
style="
border-radius:8px;
border:2px solid black;
">

@else

Tidak Ada

@endif

</td>

<td>
<b>{{ $alat->nama_alat }}</b>
</td>

<td>
{{ $alat->kategori->nama_kategori }}
</td>

<td align="center">
{{ $alat->stok }}
</td>

<td align="center">

<input
type="number"
name="jumlah[{{ $alat->id }}]"
value="1"
min="1"
style="
width:70px;
padding:6px;
border:2px solid black;
border-radius:5px;
">

</td>

</tr>

@endforeach

</tbody>

</table>

<div style="
margin-top:25px;
">

<button
type="submit"
style="
background:#7c3aed;
color:white;
padding:12px 25px;
font-weight:bold;
border:2px solid black;
border-radius:8px;
cursor:pointer;
">

Ajukan Peminjaman

</button>

</div>

</form>

</div>

@endsection
