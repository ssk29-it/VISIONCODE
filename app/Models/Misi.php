<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $table = 'misis';
    protected $fillable = ['judul', 'deskripsi', 'image'];
}
