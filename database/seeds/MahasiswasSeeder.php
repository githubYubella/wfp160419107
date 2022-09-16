<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_mahasiswas')->insert([
            'nrp'=>'160419107',
            'nama'=>"Bella"
        ]);
        DB::table('_mahasiswas')->insert([
            'nrp'=>'160419083',
            'nama'=>"Devina"
        ]);
        DB::table('_mahasiswas')->insert([
            'nrp'=>'160419157',
            'nama'=>"Elsa"
        ]);
    }
}
