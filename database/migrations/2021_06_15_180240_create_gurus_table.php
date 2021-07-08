<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->string('nip')->unique()->nullable();
            $table->string('nama_lengkap_guru');
            $table->string('kota_lahir_guru');
            $table->date('tanggal_lahir_guru');
            $table->text('alamat_guru');
            $table->string('jenis_kelamin_guru');
            $table->string('agama');
            $table->string('no_hp_guru')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->string('rememberToken')->nullable();
            $table->string('profile_img')->nullable();
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
        Schema::dropIfExists('guru');
    }
}
