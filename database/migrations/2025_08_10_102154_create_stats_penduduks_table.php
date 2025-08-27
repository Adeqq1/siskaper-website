<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('stat_penduduks', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');           
            $table->unsignedInteger('laki_laki')->default(0);
            $table->unsignedInteger('perempuan')->default(0);
            $table->unsignedInteger('kk')->default(0);
            $table->unsignedInteger('penduduk_sementara')->default(0);
            $table->unsignedInteger('mutasi_penduduk')->default(0);
            $table->unsignedInteger('total')->virtualAs('laki_laki + perempuan');
            $table->timestamps();
            $table->unique('tahun');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stat_penduduks');
    }
};
