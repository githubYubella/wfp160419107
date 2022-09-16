<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MatakuliahsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliahs')->insert([
            'kode'=>'001',
            'nama'=>"WFP"
        ]);
        DB::table('matakuliahs')->insert([
            'kode'=>'002',
            'nama'=>"Emertech"
        ]);
    }
}
