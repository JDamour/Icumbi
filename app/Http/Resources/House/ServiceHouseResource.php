<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UploadResource;

class ServiceHouseResource extends JsonResource {


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request) {
        return [
            "id" => $this->id,
            "house" => [
                "housePrice" => $this->house->housePrice,
                "houseLocation" => $this->house->houseLocation,
                "street" => $this->house->streetCode,
                "ownerFName" => $this->user->firstName,
                "ownerLName" => $this->user->lastName,
                "status" => $this->house->status,
                "paymentfrequency" => $this->house->paymentfrequency->name,
                "country" => $this->house->country->name,
                "province" => $this->house->province->name,
                "district" => $this->house->district->name,
                "sector" => $this->house->sector->name,
                "cell" => $this->house->cell,
                "rooms" => $this->house->numberOfRooms,
                "length" => $this->house->length,
                "width" => $this->house->width,
                "water" => $this->house->water,
                "bathroom" => $this->house->bathroom,
                "toilet" => $this->house->toilet,
                "fenced" => $this->house->fenced,
                "views" => count($this->house->views),
                "photos" => UploadResource::collection($this->house->uploads)
            ],
            "refunded" => $this->refunded,
            "paymentID" => $this->payment_id,
            "userID" => $this->user_id,
            'createdAt' => $this->created_at
            
        ];
    }
}