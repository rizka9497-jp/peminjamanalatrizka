<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /*
    |--------------------------------------------------------------------------
    | NAMA TABEL
    |--------------------------------------------------------------------------
    */

    protected $table = 'users';

    /*
    |--------------------------------------------------------------------------
    | PRIMARY KEY
    |--------------------------------------------------------------------------
    */

    protected $primaryKey = 'id';

    /*
    |--------------------------------------------------------------------------
    | MASS ASSIGNMENT
    |--------------------------------------------------------------------------
    */

    protected $fillable = [
        'nama',
        'username',
        'password',
        'role',
    ];

    /*
    |--------------------------------------------------------------------------
    | HIDDEN
    |--------------------------------------------------------------------------
    */

    protected $hidden = [
        'password',
        'remember_token',
    ];
}