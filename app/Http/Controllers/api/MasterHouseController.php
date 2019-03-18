<?php

namespace App\Http\Controllers\api;

use App\User;
use App\House;
use App\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\House\MasterHouseResource as HouseResource;
use App\Http\Resources\House\HouseCollection as HouseCollection;
use Illuminate\Support\Facades\Auth;


class MasterHouseController extends Controller {

    /**
     * API Function to display single house
     * 
     * @param int $house house id
     */
    public function show ($house) {


        // record house view
        $id = $house;
        $ip = $_SERVER['REMOTE_ADDR'];
        $views = View::where('ip_address', $ip)->orderBy('created_at', 'desc')->first();
        if ($views) {
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($views->created_at);
            $time_diff = $latest_timestamp + (60 * 60 * 5);
            if ($time_diff < $current_timestamp) {
                $view = View::create([
                    "ip_address" => $ip,
                    "house_id" => $id
                ]);
            }
        } else {
            $view = View::create([
                "ip_address" => $ip,
                "house_id" => $id
            ]);
        }

        // return house details
        $house = House::find($house);
        if ($house) {
            return new HouseResource($house);
        } else {
            return response()->json([
                "status" => "404",
                "description" => "house not found"
            ], 404);
        }
        
    }

    /**
     * 
     * API Function to return multiple house results
     * 
     * @param Illuminate\Http\Request $request
     * 
     */

    public function list(Request $request) {
        $single_input = false;
        $house = House::where('status', 2);

        // set location search
        if ($request->filled("district")) {
            $single_input = true;
            $house = $house->where('district_id', $request->district);
        }

        // set minimum price
        if ($request->filled("startPrice")) {
            $single_input = true;
            $house = $house->where("housePrice", ">=", $request->startPrice);

        }

        // set maximum price
        if ($request->filled("endPrice")) {
            $single_input = true;
            $house = $house->where("housePrice", "<=", $request->endPrice);
        }

        // pagination
        if ($request->filled(["size", "page"])) {
            $single_input = true;
            $house = $house->offset(($request->page - 1) * $request->size)->limit($request->size);
            
        }

        // return house based on sent conditions
        $house = $house->get();

        return (HouseResource::collection($house))->additional([
            "meta" => [
                "count" => count($house)
            ]
        ]);

    }
}