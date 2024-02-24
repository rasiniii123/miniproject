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
        Schema::create('_histori', function (Blueprint $table) {
            $table->id();
            $table->string('path_kamar');
            $table->string('nama_kamar');
            $table->enum('status', ['pending', 'accept', 'reject'])->default('pending');
            $table->string('total');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_histori');
    }
};
