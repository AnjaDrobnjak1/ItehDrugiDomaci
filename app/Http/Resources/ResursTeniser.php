<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursTeniser extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID ' => $this->resource->id,
            'Ime i prezime ' => $this->resource->ime_prezime,
            'Pozicija ' => $this->resource->pozicija,
            'Broj titula ' => $this->resource->broj_titula,
        ];
    }
}
