<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10;$i++){
            DB::table('categories')->insert([
                'nama'=> Str::random(10),
             ]); 
        }
      
    }
}
