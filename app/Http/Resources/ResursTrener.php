<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursTrener extends JsonResource
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
            'Država ' => new ResursDrzava($this->resource->drzava_id),
            'Teniser ' => new ResursTeniser($this->resource->teniser_id),
        ];
    }
}
