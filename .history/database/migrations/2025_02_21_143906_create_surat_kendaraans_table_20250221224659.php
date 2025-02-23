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
        Schema::create('surat_kendaraans', function (Blueprint $table) {
            $table->char('id_surat', 5)->primary();
            $table->char('id_surat', 5)->primary();
            $table->string('nomor_surat', 20);
            $table->date('tanggal_terbit');
            $table->date('tanggal_expired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_kendaraans');
    }
};
