<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alats';

    protected $fillable = [
        'nama_alat',
        'kategori_id',
        'stok',
        'kondisi',
        'foto',
    ];
}