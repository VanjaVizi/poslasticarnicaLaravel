<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use App\Models\Korpa;
use App\Models\Proizvod;
use App\Models\StavkaKorpe;
use App\Models\User;
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
       
       
     
      
        Korpa::truncate();
        StavkaKorpe::truncate();
        Proizvod::truncate();
        Kategorija::truncate();
        User::truncate();

         \App\Models\User::factory(10)->create();

         $ks= new KategorijaSeeder();
         $ks->run();

         $ps = new ProizvodSeeder();
         $ps->run();

       //  $sks= new StavkaKorpeSeeder();
      //   $sks->run();

         //$korpaS= new KorpaSeeder();
        // $korpaS->run();








    }
}
