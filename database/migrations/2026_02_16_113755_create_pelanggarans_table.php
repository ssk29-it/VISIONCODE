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
        Schema::create('pelanggarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gurubks_id')
                ->constrained('gurubks')
                ->cascadeOnUpdate();
            $table->foreignId('siswas_id')
                ->constrained('siswas')
                ->cascadeOnUpdate();
            $table->foreignId('walikelas_id')
                ->constrained('walikelas')
                ->cascadeOnUpdate();
            $table->string('nama_siswa', 50);
            $table->string('kelas', 10);
            $table->string('jurusan', 50);
            $table->enum('jk', ['L','P']);
            $table->string('no_hp_siswa', 50);
            $table->string('jenis_pelanggaran', 100);
            $table->string('point_pelanggaran', 3);
            $table->string('no_hp_ortu', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggarans');
    }
};
