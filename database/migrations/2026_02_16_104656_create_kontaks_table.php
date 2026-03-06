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
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admins_id')
                ->constrained('admins')
                ->cascadeOnUpdate();
            $table->string('maps', 255);
            $table->string('no_hp', 13); 
            $table->string('email', 50);
            $table->string('jam', 25);
            $table->string('instagram', 50);
            $table->string('alamat', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};
