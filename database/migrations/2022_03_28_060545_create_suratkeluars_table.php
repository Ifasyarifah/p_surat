<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluars', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_s');
            $table->integer('nomor_suratK');
            $table->string('lampiran');
            $table->string('perihal_k');
            $table->string('nama_pemohon');
            $table->string('tempat');
            $table->string('isi');
            $table->string('tujuan');
            $table->string('hari');
            $table->date('tgl');
            $table->string('lokasi');
            $table->string('agenda');
            $table->string('catatan');
            $table->string('TTD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratkeluars');
    }
}
