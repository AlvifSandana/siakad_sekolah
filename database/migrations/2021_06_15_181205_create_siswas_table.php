<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nis');
            $table->string('nama_lengkap');
            $table->string('kota_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('status_dalam_keluarga');
            $table->integer('anak_ke');
            $table->text('alamat_siswa');
            $table->string('no_hp_siswa');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->text('alamat_ortu');
            $table->string('no_hp_ortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali');
            $table->text('alamat_wali');
            $table->string('no_hp_wali');
            $table->string('pekerjaan_wali');
            $table->foreignId('kelas_id')->constrained('kelas', 'id_kelas');
            $table->foreignId('tahun_angkatan_id')->constrained('tahun_ajaran', 'id_tahun_ajaran');
            $table->string('profile_img');
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
        Schema::dropIfExists('siswa');
    }
}
