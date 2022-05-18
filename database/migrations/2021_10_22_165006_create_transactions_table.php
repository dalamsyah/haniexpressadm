<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('no_resi');
            $table->string('cabang');
            $table->string('nama_pengambil_barang')->nullable();
            $table->string('nama_pengirim');
            $table->string('alamat_pengirim');
            $table->string('kota_pengirim');
            $table->string('no_handphone_pengirim');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('kota_penerima');
            $table->string('no_handphone_penerima');
            $table->string('cara_pembayaran');
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
        Schema::dropIfExists('transactions');
    }
}
