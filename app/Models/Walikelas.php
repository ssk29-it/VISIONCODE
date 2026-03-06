<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    protected $table = 'walikelas';

    protected $fillable = [
        'nama_guru',
        'nip',
        'no_hp',
        'email',
        'alamat',
        'image',
        'jk',
    ];

    public function siswa()
{
    return $this->hasMany(Siswa::class);
}

}
