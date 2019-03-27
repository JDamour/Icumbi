<?php

namespace App\Http\Controllers\api;

use App\Uploads;
use App\District;
use App\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UploadResource;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $province= Province::find($id);
        $districts[] = District::where("province_id",$id)->get();
        $count = District::where("province_id",$id)->count();
        switch ($id) {
            case 1:
            return response()->json([
                "Districts" => $count,
                "name" => "Amajyaruguru",
                "districts"=>$districts,
                
                ]);
                break;
            case 3:
            return response()->json([
                "Districts" => $count,
                "name" => "Iburasiravuba",
                "districts"=>$districts,
                ]);
                break;
            case 4:
            return response()->json([
                "Districts" => $count,
                "name" => "Uburengerazuba",
                "districts"=>$districts,
                ]);
                break;
            case 2:
            return response()->json([
                "Districts" => $count,
                "name" => "Amajyepfo",
                "districts"=>$districts,
                ]);
                break;
            case 5:
            return response()->json([
                "Districts" => $count,
                "name" => "Kigali",
                "districts"=>$districts,
                ]);
                break;
            
            default:
            return response()->json([
                "Error"=>"Undefined Province"
                ]);
                break;
        }
        
        //
        // return UploadResource::collection($house->uploads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function show(Uploads $uploads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function edit(Uploads $uploads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uploads $uploads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uploads  $uploads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uploads $uploads)
    {
        //
    }
}