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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_transaksi');
            $table->integer('total_item')->default(0);
            $table->integer('total_harga')->default(0);
            $table->integer('id_kasir')->nullable();
            $table->foreign('id_kasir')->references('nip')->on('users');
            $table->String('status')->nullable()->default('aktif');
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
        Schema::dropIfExists('transaksi');
    }
};
