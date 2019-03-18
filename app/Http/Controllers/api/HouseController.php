<?php

namespace App\Http\Controllers\api;

use App\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\House\HouseResource as HouseResource;
use App\Http\Resources\House\HouseCollection as HouseCollection;
use App\Http\Requests\HouseFormRequest;
use Auth;


class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $houses = House::all();
        return new HouseCollection(HouseResource::collection($houses));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HouseFormRequest $request)
    {
        //
//        return $request->all();
//        return $request->country;

        $house = new House();
        $house->houseLocation = $request->houseLocation;
        $house->housePrice = $request->housePrice;
        $house->streetCode = $request->streetCode;
        $house->status = $request->status;
        $house->user_id = $request->user_id;

        $house->numberOfRooms = $request->rooms;

        $house->length = $request->length;
        $house->width = $request->width;
        $house->water = $request->water;
        $house->bathroom = $request->bathroom;
        $house->toilet = $request->toilet;
        $house->fenced = $request->fenced;

        $house->paymentfrequency_id = $request->payfreq;
        $house->country_id = $request->country;
        $house->province_id = $request->province;
        $house->district_id = $request->district;
        $house->sector_id = $request->sector;

        $house->cell = $request->cell;

        if($house->save())
        {
            return response($house, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
        return new HouseResource($house);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        //
//        return $request->all();
        //rename field name
        $request['numberOfRooms']  = $request->rooms;
        $request['paymentfrequency_id']  = $request->payfreq;
        $request['country_id']  = $request->country;
        $request['province_id']  = $request->province;
        $request['district_id']  = $request->district;
        $request['sector_id '] = $request->sector;

        //delete renamed field name
        unset($request['rooms']);
        unset($request['payfreq']);
        unset($request['country']);
        unset($request['province']);
        unset($request['district']);
        unset($request['sector']);

        if($house->update($request->all()))
        {
            return response($house, 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
        if($house->delete())
        {
            return response(null, 204);
        }
    }

    public function userHouses()
    {
//        if(Auth::check()){
//
            $user = Auth::user();
//          $houses = $user->house;
////        return new HouseCollection(HouseResource::collection($houses));
//        return dd($houses);
//        }
//
////        return "not logged in";
        return response()->json(['success' => $user]);

    }
}
