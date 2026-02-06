<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('admin_histories', function (Blueprint $table) {
            // Tambahkan kolom admin_username
            if (!Schema::hasColumn('admin_histories', 'admin_username')) {
                $table->string('admin_username', 50)->after('admin_id');
            }
        });
    }

    public function down(): void
    {
        Schema::table('admin_histories', function (Blueprint $table) {
            if (Schema::hasColumn('admin_histories', 'admin_username')) {
                $table->dropColumn('admin_username');
            }
        });
    }
};
