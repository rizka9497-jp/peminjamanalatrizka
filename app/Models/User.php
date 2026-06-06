<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nama',
        'username',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
    ];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }
}