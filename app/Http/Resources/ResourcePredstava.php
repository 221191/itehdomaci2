<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ResourceReditelj;
class ResourcePredstava extends JsonResource
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
            'Sifra predstave ' =>$this->resource->sifraPredstave,
            'Ime predstave ' =>$this->resource->imePredstave,
            'Reditelj ' =>new ResourceReditelj($this->resource->reditelj)
        ];
    }
}
