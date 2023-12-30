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
        Schema::create('petanis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('nama_kelompok');
            $table->text('alamat');
            $table->string('job');
            $table->string('phone');
            $table->float('luas_lahan');
            $table->string('kordinat_lahan')->nullable();
            $table->dateTime('blacklist_at')->nullable();
            $table->string('blacklist_reason', 400)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petani');
    }
};
