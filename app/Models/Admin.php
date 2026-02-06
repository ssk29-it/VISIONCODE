<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admin extends Authenticatable
{
    use Notifiable;

protected $fillable = [
    'username',
    'password',
    'full_name',
    'email',
    'phone',
    'birth_date',
    'address',
    'profile_photo',
];

    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
