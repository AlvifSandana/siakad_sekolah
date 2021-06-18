<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JadwalPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // define faker
        $faker = Faker::create('id_ID');

        // create a dummy data
        DB::table('jadwal_pelajaran')->insert([
            'mapel_id' => 1,
            'guru_id' => 1,
            'hari_id' => 1,
            'jam_mapel_id' => 1,
            'kelas_id' => 1,
            'semester_id' => 1,
            'tahun_ajaran_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
