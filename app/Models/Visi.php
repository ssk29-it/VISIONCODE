<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    protected $table = 'visis';
    protected $fillable = ['judul', 'deskripsi', 'image1', 'image2'];
}
