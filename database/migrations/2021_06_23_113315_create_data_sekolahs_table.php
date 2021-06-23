<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sekolah', function (Blueprint $table) {
            $table->id('id_data_sekolah');
            $table->string('nama_sekolah')->nullable();
            $table->string('npsn')->nullable();
            $table->string('nss')->nullable();
            $table->text('alamat_sekolah')->nullable();
            $table->string('telp_fax')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('data_sekolah');
    }
}
