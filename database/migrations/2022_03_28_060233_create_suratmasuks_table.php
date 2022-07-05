<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuks', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_suratM');
            $table->string('perihal_m');
            $table->string('nama_penerima');
            $table->string('hari_m');
            $table->datetime('tanggal_surat');
            $table->string('tempat');
            $table->string('acara');
            $table->string('pakaian');
            $table->string('catatan');
            $table->string('file');
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
        Schema::dropIfExists('suratmasuks');
    }
}
