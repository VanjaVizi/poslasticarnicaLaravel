<?php

namespace App\Http\Resources;

use App\Models\Proizvod;
use Database\Factories\ProizvodFactory;
use Illuminate\Http\Resources\Json\JsonResource;

class StavkaKorpeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'korpa' => $this->resource->korpa_id,
            'proizvod' => new ProizvodFactory(Proizvod::find($this->resource->proizvod_id)),

            'kolicina' => $this->resource->kolicina,

            'ukupna_cena' => $this->resource->ukupna_cena


        ];
    }
}
