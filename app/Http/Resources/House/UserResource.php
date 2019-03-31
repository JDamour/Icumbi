<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\House\DistrictResource;

class UserResource extends JsonResource {
     /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function toArray($request) {
        return [
            "id" => $this->id,
            "firstname" => $this->firstName,
            "lastname" => $this->lastName,
            "email" => $this->email,
            "phone" => $this->phoneNumber
        ];
    }
}