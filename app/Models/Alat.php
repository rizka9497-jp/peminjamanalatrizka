<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alats';

    protected $fillable = [
        'kategori_id',
        'nama_alat',
        'stok',
        'kondisi',
        'foto',
        'status'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function detailPeminjamans()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }
}