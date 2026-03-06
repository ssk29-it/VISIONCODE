<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'username',
        'password',
        'role'
    ];

    protected $hidden = [
        'password'
    ];

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }

    public function gurubk()
    {
        return $this->hasOne(Gurubk::class);
    }
}
