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
            $table->foreignId('mapel_id')->constrained('mapel', 'id_mapel')->onDelete('cascade');
            $table->foreignId('guru_id')->constrained('guru', 'id_guru')->onDelete('cascade');
            $table->foreignId('hari_id')->constrained('hari', 'id_hari')->onDelete('cascade');
            $table->foreignId('jam_mapel_id')->constrained('jam_mapel', 'id_jam_mapel')->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained('kelas', 'id_kelas')->onDelete('cascade');
            $table->foreignId('semester_id')->constrained('semester', 'id_semester')->onDelete('cascade');
            $table->foreignId('tahun_ajaran_id')->constrained('tahun_ajaran', 'id_tahun_ajaran')->onDelete('cascade');
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
