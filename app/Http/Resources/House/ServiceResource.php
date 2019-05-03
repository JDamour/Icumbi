<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\House\MasterHouseResource;

class ServiceResource extends JsonResource {


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request) {
        return [
            "id" => $this->id,
            "house" => new MasterHouseResource($this->house),
            "refunded" => $this->refunded,
            "paymentID" => $this->payment_id,
            "userID" => $this->user_id,
            'createdAt' => $this->created_at
        ];
    }
}