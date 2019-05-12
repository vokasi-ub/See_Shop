<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_barang',30);
            $table->string('nama_barang',30);
            $table->unsignedBigInteger('id_kategori_barang');
            $table->foreign('id_kategori_barang')->references('id')->on('kategori_barang')->onDelete('cascade');
            $table->string('gambar',255);
            $table->Integer('stok');
            $table->Integer('harga');
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
        Schema::dropIfExists('barang');
        $table->dropForeign(['id_kategori_barang']);
    }
}
