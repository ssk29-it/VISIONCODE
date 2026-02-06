<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan'; // sesuai migration
protected $fillable = ['subject', 'name', 'email', 'message', 'is_read'];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
