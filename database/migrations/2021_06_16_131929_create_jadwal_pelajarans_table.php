<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->foreignId('mapel_id')->constrained('mapel', 'id_mapel');
            $table->foreignId('guru_id')->constrained('guru', 'id_guru');
            $table->foreignId('jam_mapel_id')->constrained('jam_mapel', 'id_jam_mapel');
            $table->foreignId('kelas_id')->constrained('kelas', 'id_kelas');
            $table->foreignId('semester_id')->constrained('semester', 'id_semester');
            $table->foreignId('tahun_ajaran_id')->constrained('tahun_ajaran', 'id_tahun_ajaran');
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
        Schema::dropIfExists('jadwal_pelajaran');
    }
}
