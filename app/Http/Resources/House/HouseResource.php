<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Resources\Json\JsonResource;

class HouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return
            [
                "id" =>$this->id,
                "houseLocation"=> $this->houseLocation,
                "housePrice"=> $this->housePrice,
                "streetCode"=> $this->streetCode,
                "status"=> $this->status,
                "house owner" => $this->user->firstName." ". $this->user->lastName,
                "paymentfrequency"=> $this->paymentfrequency->name,
                "country" => $this->country->name,
                "province" => $this->province->name,
                "district" => $this->district->name,
                "sector" => $this->sector->name,
                "cell" => $this->cell,
                "numberOfRooms" => $this->numberOfRooms,
                "length" => $this->length,
                "width" => $this->width,
                "water" => $this->water,
                "bathroom" => $this->bathroom,
                "toilet" => $this->toilet,
                "fenced" => $this->fenced,
                "link" =>
                    [
                        "href" => route('photos.index', $this->id)
                    ]
            ];
    }
}
