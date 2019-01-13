<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
use App\House;
use App\Sector;
use App\Uploads;
class SearchController extends Controller
{
//   public function index()
//     {
//         $houses =House::where('status',2)->get();
//         return view('search.search', compact('houses'));
//     }
//     public function search(Request $request) 
//     { 
//         $test = "0 Houses Found";
//         if($request->ajax())
//         { 
//             $card="";
//             $carddd="";
//             $count=DB::table('views_overall_houses')->where('districtName','LIKE','%'.$request->searchaa."%")
//                     ->orWhere('sectorName','LIKE','%'.$request->searchaa."%")
//                     ->orWhere('price','LIKE','%'.$request->searchaa."%")
//                     ->orWhere('paymentFrequency','LIKE','%'.$request->searchaa."%")
//                     ->groupBy('houseId')
//                     ->count();
//                 $house_views=DB::table('views_overall_houses')->where('districtName','LIKE','%'.$request->searchaa."%")
//                     ->orWhere('sectorName','LIKE','%'.$request->searchaa."%")
//                     ->orWhere('price','LIKE','%'.$request->searchaa."%")
//                     ->orWhere('paymentFrequency','LIKE','%'.$request->searchaa."%")
//                     ->groupBy('houseId')
//                     ->get();
//                     if($house_views)
//                     {
//                         if ($count == 0) {
//                             $carddd .=' 
//                                 <div class="col-md-4 col-sm-6">
//                                 <div class="probootstrap-card probootstrap-listing">
//                                     <div class="probootstrap-card-media">
//                                     </div>
//                                     <div class="probootstrap-card-text">
//                                         <h1 class="probootstrap-card-heading">0 Houses Found</h1>
//                                        <div class="probootstrap-listing-price"><strong></strong></div>
//                                     </div>
//                                 </div>
//                                 </div>';
//                                 // dd($count);
//                             return Response($carddd);
//                         }
//                         else {
//                             foreach ($house_views as $key => $house_view) {
//                                 $card .=' 
//                                 <a href="'.route('houseshow.show', $house_view->houseId).'"><div class="col-md-4 col-sm-6">
//                                 <div class="probootstrap-card probootstrap-listing">
//                                     <div class="probootstrap-card-media">
//                                         <img src="/images/houseUploads/'.$house_view->image.'">
//                                     </div>
//                                     <div class="probootstrap-card-text">
//                                         <h2 class="probootstrap-card-heading">Number of Bed rooms:'. $house_view->rooms.'</h2>
//                                         <i class="icon-location2"></i> <span>Location:'. $house_view->sectorName.'/'. $house_view->districtName.'</span>
//                                         <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
//                                         <div class="probootstrap-listing-price"><strong>'.$house_view->price.'Frw '.$house_view->paymentFrequency.'</strong></div>
//                                     </div>
//                                 </div>
//                                 </div></a>';
//                             }
//                             // dd($count);
//                         return Response($card);
//                         }
                            
//                     }
//         }
        
//     }  
}