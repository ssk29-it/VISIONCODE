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
        Schema::create('laporan_pelanggarans', function (Blueprint $table) {
            $table->id();
                        $table->foreignId('admins_id')
                ->constrained('admins')
                ->cascadeOnUpdate();
            $table->foreignId('pelanggarans_id')
                ->constrained('pelanggarans')
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
        Schema::dropIfExists('laporan_pelanggarans');
    }
};
