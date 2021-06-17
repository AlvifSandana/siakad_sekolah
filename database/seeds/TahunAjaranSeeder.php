<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 3 dummies data
        DB::table('tahun_ajaran')->insert(
            [
                'nama_tahun_ajaran' => '2021/2022',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        );
        DB::table('tahun_ajaran')->insert(
            [
                'nama_tahun_ajaran' => '2022/2023',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        );
        DB::table('tahun_ajaran')->insert(
            [
                'nama_tahun_ajaran' => '2023/2024',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        );
    }
}
