<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus user admin lama kalau ada
        Admin::where('username', 'admin')->delete();

        
        Admin::create([
    'username' => 'admin1',
    'password' => bcrypt('adminpertama'),
]);

    }

    
}
