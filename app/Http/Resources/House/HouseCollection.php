<?php

namespace App\Http\Resources\House;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HouseCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return
            [
            'data' =>$this->collection->transform(function($house){
                return
                    [
                    'id'=>$house->id,
                    'Location'=>$house->houseLocation,
                    'Price'=>$house->housePrice,
                    'photo' =>$house->uploads,
                    'link' =>[
                        'href'=>route('v1.houses.show', $house->id)
                    ],
                ];
            }),
        ];
    }
}
