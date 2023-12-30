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
        Schema::create('persyaratans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petani_id')->constrained()->onDelete('cascade');
            $table->foreignId('alsitan_id')->constrained()->onDelete('cascade');
            $table->date('mulai');
            $table->date('sampai_dengan');
            $table->integer('biaya_perhari');
            $table->integer('pembayaran');
            $table->string('pembayaran_dalam_bahasa', 400);
            $table->string('bukti_pembayaran');
            $table->string('ktp');
            $table->string('rekomendasi');
            $table->string('proposal');
            $table->enum('status', ['menunggu persetujuan', 'disetujui', 'ditolak'])->default('menunggu persetujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persyaratans');
    }
};
