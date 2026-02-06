<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminHistory extends Model
{
    protected $fillable = [
        'admin_id', 'action', 'model', 'model_id', 'description'
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function getCreatedAtAttribute($value)
{
    return \Carbon\Carbon::parse($value)->timezone('Asia/Jakarta');
}
}

