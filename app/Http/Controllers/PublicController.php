<?php

namespace App\Http\Controllers;

use App\User;
use App\House;
use App\Country;
use App\Uploads;
use App\Sector;
use App\District;
use App\Province;
use App\Paymentfrequency;
use App\Http\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DisplayHousesOnHOusePage()
    {
        // $houses = House::paginate(6);
        $count = House::where("status","=",2)->count();
        if($count == 0){
            return view('client.norecord');
            dd($count);
        }
        else {
            $houses = House::where("status","=",2)->paginate(9);
            return view('client.index', compact('houses'));
            dd($count);
        }
    }
    public function DisplayHousesOnHomePage()
    {
        $count = House::where("status","=",2)->count();
        if($count == 0){
            return view('client.norecordHouse');
            // dd($count);
        }
        else {
            $houses = House::where("status","=",2)->paginate(9);
            return view('welcome', compact('houses'));
            // dd($count);
        }
        
    }
    public function districtHouses($id)
    {
       $houses = House::where("district_id","=",$id)->get();
        return view('client.districts', compact('houses'));
        // dd($houses);
    }
    public function provinceHouses($id)
    {
    //     $houses =DB::table('houses')->whereprovince_id(3)->get();
        $houses = House::where("province_id","=",$id)->get();
        return view('client.provinces', compact('houses'));
        
    }
    
    public function paymentfrequency()
    {
        $payments = Paymentfrequency::all();
        return view('client.province.kigali', compact('payments'));
    }
    
    public function upload()
    {
        $uploads = Upload::all();
        return view('client.index', compact('uploads'));
    }
    public function uploadd()
    {
        $uploads = Upload::all();
        return view('client.province.kigali', compact('uploads'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchSuggestion(Request $request)
    {
         return House::where('houselocation', 'LIKE', '%'.$request->q.'%')->get();

        
    }

    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $house = House::find($id);
        return view('client.show', compact('house'));
        // return view('client.show', ['house'=>$house]);
    }
    public function showw($id)
    {
        //
        $provinces = Province::find($id);
        return view('client.province.kigali', compact('provinces'));
        // return view('client.show', ['house'=>$house]);
    }

    /**
     *
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
