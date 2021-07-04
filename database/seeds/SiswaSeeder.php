<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // define faker object from Faker Factory
        $faker = Faker::create('id_ID');

        // define gender
        $jk = $faker->randomElements(['l', 'p']);

        // define agama
        $agama = $faker->randomElements(['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu']);
        // Seeder Siswa with 20 dummies data
        for ($i=1; $i <= 20; $i++) {
            DB::table('siswa')->insert([
                'nisn' => $faker->numberBetween(2003010101, 2006121212),
                'nis' => $faker->numberBetween(2100, 4999),
                'nama_lengkap' => $faker->name($jk[0]),
                'kota_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d'),
                'agama_siswa' => $agama[0],
                'jenis_kelamin'=> $jk[0],
                'status_dalam_keluarga' => 'anak',
                'anak_ke' => $faker->numberBetween(1, 5),
                'alamat_siswa' => $faker->address,
                'no_hp_siswa' => $faker->phoneNumber,
                'nama_ayah' => $faker->name('laki-laki'),
                'nama_ibu' => $faker->name('perempuan'),
                'alamat_ortu' => $faker->address,
                'no_hp_ortu' => $faker->phoneNumber,
                'pekerjaan_ayah' => $faker->jobTitle,
                'pekerjaan_ibu' => $faker->jobTitle,
                'nama_wali' => $faker->name($jk[0]),
                'alamat_wali' => $faker->address,
                'no_hp_wali' => $faker->phoneNumber,
                'kelas_id' => $faker->numberBetween(1, 9),
                'tahun_angkatan_id' => $faker->numberBetween(1, 3),
                'profile_img' => 'img_siswa.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }

    }
}
