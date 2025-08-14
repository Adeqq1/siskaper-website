<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('apbd_desas', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->unsignedBigInteger('pendapatan')->default(0);
            $table->unsignedBigInteger('belanja')->default(0);
            $table->unsignedBigInteger('pembiayaan')->default(0);
            $table->json('rincian')->nullable(); // optional breakdown
            $table->string('lampiran_path')->nullable(); // pdf/image jika ada
            $table->timestamps();
            $table->unique('tahun');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apbd_desas');
    }
};