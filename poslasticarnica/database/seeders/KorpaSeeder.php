<?php

namespace Database\Seeders;

use App\Models\Korpa;
use Illuminate\Database\Seeder;

class KorpaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Korpa::factory(1)->create();
    }
}
