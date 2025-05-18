<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('konten_dinas', function (Blueprint $table) {
            $table->id();
            $table->string('tipe')->unique(); // contoh: 'sejarah', 'visi', 'tugas'
            $table->longText('konten')->nullable(); // isi HTML-nya
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konten_dinas');
    }
};
