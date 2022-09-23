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
       $arrCategory = ['Analgesik Narkotik', 'Analgesik Non Narkotik', 'Antipirai', 'Nyeri Neuropatik','Anestetik Lokal'
        , 'Anestetik Umum dan Oksigen', 'Obat untuk Prosedur Pre Operatif', 'Antialergi dan Obat untuk Anafilaksis'
        , 'Khusus', 'Umum', 'Antiepilepsi - Antikonvulsi'];
        // for($i=0; $i<10;$i++){
        //     DB::table('categories')->insert([
        //         'nama'=> Str::random(10),
        //      ]); 
        // }

        foreach($arrCategory as $c){
            DB::table('categories')->insert([
              
                'nama'=> $c

            ]);

        }

        
      
    }
}
