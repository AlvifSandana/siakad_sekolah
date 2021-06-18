<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // define mapel
        $mapel = ['MTK', 'IPA', 'BAHASA INDONESIA', 'BAHASA INGGRIS', 'IPS', 'PPKN', 'PAI', 'SBK', 'MULOK'];

        // create mapel based on $mapel
        for ($i = 1; $i <= count($mapel); $i++) {
            DB::table('mapel')->insert([
                'nama_mapel' => $mapel[$i - 1],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
