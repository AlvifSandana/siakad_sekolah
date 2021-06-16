<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->string('nama_kelas');
            $table->foreignId('wali_kelas_id')->constrained('wali_kelas', 'id_wali_kelas');
            $table->foreignId('tahun_ajaran_id')->constrained('tahun_ajaran', 'id_tahun_ajaran');
            $table->foreignId('semester_id')->constrained('semester', 'id_semester');
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
        Schema::dropIfExists('kelas');
    }
}
