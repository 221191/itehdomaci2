<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceGlumac extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'ID ' => $this->resource->id,
            'Ime glumca ' =>$this->resource->imeGlumca,
            'Prezime glumca ' =>$this->resource->prezimeGlumca,
            'Opis uloge ' =>$this->resource->opisUloge
        ];
    }
}
