<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KelasSeeder extends Seeder
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

        // create 27 dummies data
        for ($i = 1; $i <= 9; $i++) {
            // define random kelas
            $nama_kelas = $faker->randomElements([
                'VII A', 'VII B', 'VII C',
                'VIII A', 'VIII B', 'VIII C',
                'IX A', 'IX B', 'IX C',
            ]);

            DB::table('kelas')->insert([
                'nama_kelas' => $nama_kelas[0],
                'wali_kls_id' => $faker->numberBetween(1, 9),
                'tahun_ajaran_id' => $faker->numberBetween(1, 3),
                'semester_id' => $faker->numberBetween(1, 5),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
