<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            HariSeeder::class,
            GuruSeeder::class,
            SemesterSeeder::class,
            TahunAjaranSeeder::class,
            JamMapelSeeder::class,
            MapelSeeder::class,
            WaliKelasSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
            JadwalPelajaranSeeder::class
        ]);
    }
}
