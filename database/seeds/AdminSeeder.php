<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data
        DB::table('guru')->insert([
            'nip' => 1010101010,
            'nama_lengkap_guru' => "ADMIN",
            'kota_lahir_guru' => "Banyuwangi",
            'tanggal_lahir_guru' => "1997-01-01",
            'alamat_guru' => "Banyuwangi",
            'jenis_kelamin_guru' => "l",
            'agama' => "islam",
            'no_hp_guru' => "081234567890",
            'email' => "admin@mail.com",
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'profile_img' => 'img_guru.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
