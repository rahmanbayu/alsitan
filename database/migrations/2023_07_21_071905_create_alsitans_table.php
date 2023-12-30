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
        Schema::create('alsitans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_alat')->unique();
            $table->string('no_rangka')->unique();
            $table->string('no_mesin')->unique();
            $table->string('kode')->unique();
            $table->string('merek');
            $table->string('tipe');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alsitan');
    }
};
