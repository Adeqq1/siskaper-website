<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pengajuan_surats', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_surat', 120);              // dari list
            $table->string('nama_pemohon', 255);
            $table->text('alasan')->nullable();
            $table->string('tempat_lahir', 120);
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 1);                // L / P
            $table->string('nik', 20);                       // 16 digit, simpan string
            $table->text('alamat');
            $table->timestamp('read_at')->nullable()->index(); // penanda sudah dibaca admin
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_surats');
    }
};
