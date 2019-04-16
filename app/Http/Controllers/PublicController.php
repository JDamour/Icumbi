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
    public function index()
    {
        $houses =House::where('status',2)->get();
        return view('search.search', compact('houses'));
    }
    public function search(Request $request) 
    { 
        // $test = "0 Houses Found";
        if($request->ajax())
        { 
            $card="";
            $carddd="";
            $count=DB::table('views_overall_houses')->where('districtName','LIKE','%'.$request->searchaa."%")
                    ->orWhere('sectorName','LIKE','%'.$request->searchaa."%")
                    ->orWhere('price','LIKE','%'.$request->searchaa."%")
                    ->orWhere('paymentFrequency','LIKE','%'.$request->searchaa."%")
                    ->groupBy('houseId')
                    ->count();
                $house_views=DB::table('views_overall_houses')->where('districtName','LIKE','%'.$request->searchaa."%")
                    ->orWhere('sectorName','LIKE','%'.$request->searchaa."%")
                    ->orWhere('price','LIKE','%'.$request->searchaa."%")
                    ->orWhere('paymentFrequency','LIKE','%'.$request->searchaa."%")
                    ->groupBy('houseId')
                    ->get();
                    if($house_views)
                    {
                        if ($count == 0) {
                            $carddd .=' 
                                <div class="col-md-4 col-sm-6">
                                <div class="probootstrap-card probootstrap-listing">
                                    <div class="probootstrap-card-media">
                                    </div>
                                    <div class="probootstrap-card-text">
                                        <h1 class="probootstrap-card-heading">0 Houses Found</h1>
                                       <div class="probootstrap-listing-price"><strong></strong></div>
                                    </div>
                                </div>
                                </div>';
                                // dd($count);
                            return Response($carddd);
                        }
                        else {
                            foreach ($house_views as $key => $house_view) {
                                $card .=' 
                                <a href="'.route('houseshow.show', $house_view->houseId).'"><div class="col-md-4 col-sm-6">
                                <div class="probootstrap-card probootstrap-listing">
                                    <div class="probootstrap-card-media">
                                        <img src="/images/houseUploads/'.$house_view->image.'">
                                    </div>
                                    <div class="probootstrap-card-text">
                                        <h2 class="probootstrap-card-heading">Number of Bed rooms:'. $house_view->rooms.'</h2>
                                        <i class="icon-location2"></i> <span>Location:'. $house_view->sectorName.'/'. $house_view->districtName.'</span>
                                        <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
                                        <div class="probootstrap-listing-price"><strong>'.$house_view->price.'Frw '.$house_view->paymentFrequency.'</strong></div>
                                    </div>
                                </div>
                                </div></a>';
                            }
                            // dd($count);
                        return Response($card);
                        }
                            
                    }
        }
        
    } 
    public function test(){
        // $houses = House::where("status","=",2)->paginate(2);
        // return view('client.test', compact('houses'));
        $h="";
        $count = House::where("district_id",28)->count();
        $h=$count;
        dd($h);
    }
    public function DisplayHousesOnHOusePage()
    {
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
            $houses = House::where("status","=",2)->paginate(3);
            return view('welcome', compact('houses'));
            // dd($count);
        }
    }
    public function districtHouses($id)
    {
       $houses = House::where('status' , 2)->where("district_id","=",$id)->get();
    // $houses = House::where("district_id","=",$id)->get();
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
    public function searchSuggestion(Request $request)
    {
         return House::where('houselocation', 'LIKE', '%'.$request->q.'%')->get();
    }

    public function store(Request $request)
    {
        //
    }
    // public function show($id)
    // {
    //     //
    //     $house = House::find($id)->where("status", 2);
    //     return view('client.show', compact('house'));
    //     // return view('client.show', ['house'=>$house]);
    // }
    public function show($id)
    {
        //
        $house = House::find($id);
        
        if($status=2){

        return view('client.show', compact('house'));
        }
        else{
            return view('client.norecordHouse');
        }
        // return view('client.show', ['house'=>$house]);
    }
    public function showw($id)
    {
        //
        $provinces = Province::find($id);
        return view('client.province.kigali', compact('provinces'));
        // return view('client.show', ['house'=>$house]);
    }
}