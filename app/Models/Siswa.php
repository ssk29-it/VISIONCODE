<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [
         'user_id',
        'walikelas_id',
        'nama_siswa',
        'nipd',
        'kelas',
        'jurusan',
        'alamat',
        'email',
        'no_hp',
        'tempat_lahir',
        'tanggal_lahir',
        'jk'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function walikelas()
    {
        return $this->belongsTo(WaliKelas::class);
    }
public function konselings()
{
    return $this->hasMany(Konseling::class);
}

}