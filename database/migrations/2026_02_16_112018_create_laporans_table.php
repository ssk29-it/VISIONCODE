<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admins_id')
                ->constrained('admins')
                ->cascadeOnUpdate();
            $table->foreignId('detail_konselings_id')
                ->constrained('detail_konselings')
                ->cascadeOnUpdate();
            $table->date('tanggal_laporan');
            $table->string('isi_laporan', 1500);
            $table->date('waktu_laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
