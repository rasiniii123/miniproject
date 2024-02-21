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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->string('path_kamar', 255); // Sesuaikan panjang karakter yang diinginkan
            $table->string('nama_kamar', 100); // Sesuaikan panjang karakter yang diinginkan
            $table->text('deskripsi');
            $table->string('harga'); // Sesuaikan dengan format harga yang diinginkan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
