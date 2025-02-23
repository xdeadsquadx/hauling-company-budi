<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id('id_kendaraan');
            $table->string('plat_kendaraan', 6);
            $table->string('merek', 20);
            $table->string('jenis', 20);
            $table->date('terakhir_servis')->n;
            $table->char('id_pasangan', 5)->nullable();
            $table->char('id_surat', 5)->nullable();
            $table->boolean('status_maintenance')->default(false);
            $table->timestamps();

            // // Foreign key ke tabel surat_kendaraans
            // $table->foreign('id_surat')->references('id_surat')->on('surat_kendaraans')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
