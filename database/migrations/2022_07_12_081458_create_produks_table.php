<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk')->autoIncrement();
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id_kategori')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_produk')->unique();
            $table->string('nama_produk');
            $table->string('foto_produk');
            $table->integer('harga');
            $table->string('status')->default('tersedia');
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
        Schema::dropIfExists('produks');
    }
};
