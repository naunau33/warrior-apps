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
        Schema::table('hafalans', function (Blueprint $table) {
            //mengubah kolom keterangan menjadi opsional
            $table->text('keterangan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hafalans', function (Blueprint $table) {
            //jika berubah pikiran ingin mengembalikan ke kondisi awal
            $table->text('keterangan')->nullable(false)->change();
        });
    }
};
