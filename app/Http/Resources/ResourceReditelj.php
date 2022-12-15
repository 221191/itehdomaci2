<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResourceReditelj extends JsonResource
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
            'Ime reditelja ' =>$this->resource->imeReditelja,
            'Prezime reditelja ' =>$this->resource->prezimeReditelja,
            'Godine ' =>$this->resource->godine
        ];
    }
}
