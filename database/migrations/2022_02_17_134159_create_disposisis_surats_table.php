<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisisSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisis_surats', function (Blueprint $table) {
            $table->id();
            $table->string('asal_surat');
            $table->date('tanggal_diterima');
            $table->integer('nomor_agenda');
            $table->date('tanggal_d');
            $table->integer('nomor_disposisi');
            $table->string('perihal');
            $table->string('klarifikasi');
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
        Schema::dropIfExists('disposisis_surats');
    }
}
