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
        Schema::create('konselings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('gurubk_id')
                ->constrained('gurubks')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('siswa_id')
                ->constrained('siswas')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->date('tanggal_pengajuan');

            $table->enum('kategori_masalah', [
                'pribadi',
                'sosial',
                'akademik',
                'karir'
            ]);

            $table->text('keluhan');

            $table->enum('status_pengajuan', [
                'pending',
                'diterima',
                'ditolak',
                'selesai'
            ])->default('pending');

            $table->enum('metode_konseling', [
                'online',
                'offline'
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselings');
    }
};
