<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // define jam
        $jam_mulai = ['08:00', '08:40', '09:20', '10:30', '11:10', '11:50', '12:30', '13:10'];
        $jam_akhir = ['08:40', '09:20', '10:00', '11:10', '11:50', '12:30', '13:10', '13:50'];

        // create 8 dummies data
        for ($i=1; $i <= 8; $i++) {
            DB::table('jam_mapel')->insert([
                'jam_mulai' => $jam_mulai[$i - 1],
                'jam_akhir' => $jam_akhir[$i - 1],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
