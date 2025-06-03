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
        Schema::create('berita', function (Blueprint $table) {
            $table->id(); // Ini akan membuat kolom 'id' auto-increment dan primary key
            $table->text('isi_berita'); // Kolom untuk isi berita, 'text' bisa menampung banyak karakter
            $table->date('tanggal'); // Kolom untuk tanggal berita
            $table->timestamps(); // Ini akan membuat kolom 'created_at' dan 'updated_at' secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};