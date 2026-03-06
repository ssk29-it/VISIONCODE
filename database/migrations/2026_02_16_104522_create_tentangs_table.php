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
        Schema::create('tentangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admins_id')
                ->constrained('admins')
                ->cascadeOnUpdate();
            $table->string('judul', 50);
            $table->string('deskripsi', 1000); 
            $table->string('dampak', 500);
            $table->string('gambar', 100);
            $table->string('visi', 500);
            $table->string('misi', 500);
            $table->string('layanan', 1000);
            $table->string('program', 250);
            $table->string('testimoni', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangs');
    }
};
