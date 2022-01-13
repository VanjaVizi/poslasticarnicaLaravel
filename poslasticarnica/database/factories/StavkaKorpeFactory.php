<?php

namespace Database\Factories;

use App\Models\Korpa;
use App\Models\Proizvod;
use Illuminate\Database\Eloquent\Factories\Factory;

class StavkaKorpeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'proizvod_id' => $p= Proizvod::find(random_int(1,Proizvod::count())),
            'korpa_id' => 1, //Korpa::find(random_int(1,Korpa::count())),
            'kolicina' =>  $k= $this->faker->numberBetween($min = 1, $max = 10),
            'ukupna_cena'=>  $p->cena * $k
        ];
    }
}
