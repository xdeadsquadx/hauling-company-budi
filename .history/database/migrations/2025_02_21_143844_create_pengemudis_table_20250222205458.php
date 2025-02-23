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
        Schema::create('pengemudis', function (Blueprint $table) {
            $table->id('id_pengemudi');
            $table->string('nama');
            $table->integer('beban_kerja')->default(0);
            $table->boolean('status');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengemudis');
    }
};
