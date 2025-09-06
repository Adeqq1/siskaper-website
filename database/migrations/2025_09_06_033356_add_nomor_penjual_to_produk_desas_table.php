<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('produk_desas', function (Blueprint $table) {
            if (!Schema::hasColumn('produk_desas', 'nomor_penjual')) {
                $table->string('nomor_penjual')->nullable()->after('deskripsi');
            }
        });
    }

    public function down(): void
    {
        Schema::table('produk_desas', function (Blueprint $table) {
            if (Schema::hasColumn('produk_desas', 'nomor_penjual')) {
                $table->dropColumn('nomor_penjual');
            }
        });
    }
};
