<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->string('nisn');
            $table->date('tanggal_bayar');
            $table->string('bulan_dibayar');
            $table->string('keterangan');
            $table->foreignId('spp_id')->constrained('spp', 'id_spp')->onDelete('cascade');
            $table->foreignId('id_petugas')->constrained('guru', 'id_guru')->onDelete('cascade');
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
        Schema::dropIfExists('pembayaran');
    }
}
