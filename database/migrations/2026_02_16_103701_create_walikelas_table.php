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
        Schema::create('walikelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru', 50);
            $table->string('nip', 20);
            $table->string('no_hp', 13); 
            $table->string('email', 50);
            $table->string('alamat', 50);
            $table->string('image', 255);
            $table->enum('jk', ['L','P']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walikelas');
    }
};
