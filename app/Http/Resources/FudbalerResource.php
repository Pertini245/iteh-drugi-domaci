<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FudbalerResource extends JsonResource
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
            'id' => $this->resource->id,
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'jmbg' => $this->resource->jmbg,
            'broj na dresu' => $this->resource->brojDres,
            'klub' => new KlubResource($this->resource->klub)
        ];
    }
}
