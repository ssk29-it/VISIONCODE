<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gurubk extends Model
{
    protected $table = 'gurubks';

    protected $fillable = [
        'user_id',
        'nama_gurubk',
        'nip',
        'no_hp',
        'email',
        'jk',
        'image',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'pendidikan_terakhir'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function konselings()
    {
        return $this->hasMany(Konseling::class, 'gurubks_id');
    }
}
