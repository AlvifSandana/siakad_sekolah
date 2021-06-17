<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaliKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 9 dummies data
        for ($i=1; $i <= 9 ; $i++) {
            DB::table('wali_kelas')->insert([
                'guru_id' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
