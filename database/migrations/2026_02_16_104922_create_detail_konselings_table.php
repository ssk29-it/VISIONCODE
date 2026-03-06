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
        Schema::create('detail_konselings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konselings_id')
                ->constrained('konselings')
                ->cascadeOnUpdate();
            $table->enum('status_konseling', ['terima','tolak']);
            $table->string('topik_permasalahan', 1000);
            $table->date('tanggal_konseling');
            $table->string('hasil_konseling', 500);
            $table->string('catatan_guru_bk', 1500);
            $table->enum('status_tindak_lanjut', ['Ya','Tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_konselings');
    }
};
