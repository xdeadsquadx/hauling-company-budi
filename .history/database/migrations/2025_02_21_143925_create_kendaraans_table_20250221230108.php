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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->char('id_kendaraan', 5)->primary();
            $table->string('plat_kendaraan', 6);
            $table->string('merek', 20);
            $table->string('jenis', 20);
            $table->char('id_pasangan', 5)->nullable();
            $table->char('id_surat', 5)->nullable();
            $table->boolean('status_maintenance')->default(false);
            $table->timestamps();

            $table->foreign('id_surat')->references('id_surat')->on('surat_kendaraan')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
