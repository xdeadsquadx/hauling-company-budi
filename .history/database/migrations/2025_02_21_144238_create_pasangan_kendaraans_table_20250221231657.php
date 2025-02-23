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
        Schema::create('pasangan_kendaraans', function (Blueprint $table) {
            $table->char('id_pasangan', 5)->primary();
            $table->char('id_kendaraan', 5);
            $table->char('od_', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasangan_kendaraans');
    }
};
