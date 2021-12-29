<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KlubResource extends JsonResource
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
            'naziv kluba' => $this->resource->nazivKluba,
            'godina osnivanja' => $this->resource->godinaOsnivanja,
            'broj titula' => $this->resource->brojTitula,
            'grad' => new GradResource($this->resource->grad),
        ];
    }
}
