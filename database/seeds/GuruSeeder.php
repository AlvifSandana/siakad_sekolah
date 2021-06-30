<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
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

        // create 40 dummies data
        for ($i = 1; $i <= 40; $i++) {
            // define gender
            $jk = $faker->randomElements(['l', 'p']);

            // define agama
            $agama = $faker->randomElements(['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu']);

            // insert data
            DB::table('guru')->insert([
                'nip' => $faker->numberBetween(1975010101, 1995121299),
                'nama_lengkap_guru' => $faker->name($jk[0]),
                'kota_lahir_guru' => $faker->city,
                'tanggal_lahir_guru' => $faker->date('Y-m-d'),
                'alamat_guru' => $faker->address,
                'jenis_kelamin_guru' => $jk[0],
                'agama' => $agama[0],
                'no_hp_guru' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => Hash::make('12345678'),
                'role' => 'guru',
                'profile_img' => 'img_guru.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
