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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->foreignId('walikelas_id')
                ->constrained('walikelas')
                ->cascadeOnUpdate();
            $table->string('nama_siswa', 50);
            $table->string('nipd', 20)->unique();
            $table->string('kelas', 10); 
            $table->string('jurusan', 50);
            $table->string('alamat', 50);
            $table->string('email', 50); 
            $table->string('no_hp', 13); 
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jk', ['L','P']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
