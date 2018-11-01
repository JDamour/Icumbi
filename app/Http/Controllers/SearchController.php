<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function test()
    {
    return view('search.test');
    }
   public function index()
    {
    return view('search.search');
    // dd($house);
    }

    public function search(Request $request) 
    { 
        if($request->ajax())
        { 
            $output=""; 
            $houses=DB::table('houses')->where('district_id','LIKE','%'.$request->search."%")->get();
            if($houses)
            {
                foreach ($houses as $key => $house) {
                $output.='<tr>'. 
                '<td>'.$house->id.'</td>'. 
                '<td>'.$house->housePrice.'</td>'.
                '<td>'.$house->houseLocation.'</td>'.
                '<td>'.$house->district_id.'</td>'.
                '</tr>';
                }
                return Response($output);
            }
        }
    }
}