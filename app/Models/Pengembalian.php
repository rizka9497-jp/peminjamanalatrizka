<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalians';

    protected $fillable = [

        'peminjaman_id',
        'tanggal_pengembalian',
        'keterlambatan',
        'denda',
        'kondisi_kembali',
        'status'

    ];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
}