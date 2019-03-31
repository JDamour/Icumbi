<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\House\DistrictResource;

class ProvinceResource extends JsonResource {
     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request) {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "districts" => DistrictResource::collection($this->districts),
            "count" => count($this->districts)
        ];
    }
}