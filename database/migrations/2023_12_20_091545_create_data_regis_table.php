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
        Schema::create('data_regis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 50);
            $table->string('alamat', 100);
            $table->string('nohp', 25);
            $table->enum('program',['reguler', 'intensif', 'super']);
            $table->enum('lokasi', ['Ketintang', 'Bubutan', 'Semampir']);
            $table->enum('metode_pembayaran', ['DiTempat', 'DANA', 'BCA']);
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_regis');
        
    }
};
