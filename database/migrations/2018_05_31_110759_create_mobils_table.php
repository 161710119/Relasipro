<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('warna');
            $table->string('transmisi');
            $table->date('tahun_keluar');
            $table->string('harga');
            $table->longText('deskripsi');
            $table->unsignedInteger('tipe_id');
            $table->foreign('tipe_id')->references('id')->on('tipes')->ondelete('cascade');
            $table->unsignedInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->ondelete('cascade');
            $table->unsignedInteger('dealer_id');
            $table->foreign('dealer_id')->references('id')->on('dealers')->ondelete('cascade');
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
        Schema::dropIfExists('mobils');
    }
}
