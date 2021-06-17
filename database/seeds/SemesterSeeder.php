<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 5 dummies data
        for ($i=1; $i <= 5; $i++) {
            DB::table('semester')->insert(
                [
                    'nama_semester' => 'Semester '.$i,
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]
            );
        }
    }
}
