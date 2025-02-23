<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('surat_kendaraans', function (Blueprint $table) {
            $table->char('id_surat', 5)->primary();
            $table->char('id_kendaraan', 5);
            $table->string('status', 20);
            $table->text('keterangan');
            $table->date('tanggal_terbit');
            $table->date('tanggal_expired');
            $table->timestamps();

            // // Foreign key ke tabel kendaraan
            // $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraans')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surat_kendaraans');
    }
};
