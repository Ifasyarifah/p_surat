<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats_keluars', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_suratK');
            $table->string('perihal_k');
            $table->string('nama_pemohon');
            $table->date('tanggal_suratK');
            $table->string('tempat');
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
        Schema::dropIfExists('surats_keluars');
    }
}