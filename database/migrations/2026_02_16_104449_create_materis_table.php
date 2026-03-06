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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admins_id')
                ->constrained('admins')
                ->cascadeOnUpdate();
            $table->string('judul', 50);
            $table->string('kategori', 50); 
            $table->string('deskripsi', 1000);
            $table->string('gambar', 100);
            $table->string('file_materi', 100);
            $table->string('video_materi', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
