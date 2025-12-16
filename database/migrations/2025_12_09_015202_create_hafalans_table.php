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
        Schema::create('hafalans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->foreignId('surat_id');
            $table->date('tanggal_penilaian');
            $table->integer('nilai_tajwid');
            $table->integer('nilai_makhroj');
            $table->integer('nilai_tartil');
            $table->integer('nilai_kelancaran');
            $table->decimal('nilai_total', total: 8, places: 2);
            $table->text('keterangan'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
