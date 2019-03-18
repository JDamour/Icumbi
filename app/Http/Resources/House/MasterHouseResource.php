<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UploadResource;

class MasterHouseResource extends JsonResource {


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request) {
        return [
            "id" => $this->id,
            "housePrice" => $this->housePrice,
            "status" => $this->status,
            "paymentfrequency" => $this->paymentfrequency->name,
            "country" => $this->country->name,
            "province" => $this->province->name,
            "district" => $this->district->name,
            "rooms" => $this->numberOfRooms,
            "length" => $this->length,
            "width" => $this->width,
            "water" => $this->water,
            "bathroom" => $this->bathroom,
            "toilet" => $this->toilet,
            "fenced" => $this->fenced,
            "views" => count($this->views),
            "photos" => UploadResource::collection($this->uploads)
        ];
    }
}