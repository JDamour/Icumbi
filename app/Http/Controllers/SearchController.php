<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
use App\House;
use App\Sector;
use App\Uploads;
class SearchController extends Controller
{
   public function index()
    {
    return view('search.search');
    // dd($house);
    }

    public function search(Request $request) 
    { 
        if($request->ajax())
        { 
            $card="";
            $houses=DB::table('houses')
            // ->join('uploads', 'uploads.house_id','=', 'houses.id')
            ->get();// dd($houses);
            if($houses){
                    $house_views=DB::table('views_overall_houses')->where('districtName','LIKE','%'.$request->searchaa."%")
                    ->orWhere('sectorName','LIKE','%'.$request->searchaa."%")
                    ->orWhere('price','LIKE','%'.$request->searchaa."%")
                    ->orWhere('paymentFrequency','LIKE','%'.$request->searchaa."%")
                    ->get();
                    if($house_views)
                    {
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
                                        <div class="probootstrap-listing-price"><strong>'.$house_view->price.' '.$house_view->paymentFrequency.'</strong></div>
                                    </div>
                                </div>
                                </div></a>';
                                
                            }
                        return Response($card);
                    }
                }
            }
        }
    }

