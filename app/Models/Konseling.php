<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    protected $table = 'konselings';

    protected $fillable = [
        'gurubk_id',
        'siswa_id',
        'tanggal_pengajuan',
        'kategori_masalah',
        'keluhan',
        'status_pengajuan',
        'metode_konseling',
    ];

public function siswa()
{
    return $this->belongsTo(Siswa::class);
}

public function gurubk()
{
    return $this->belongsTo(Gurubk::class);
}

}