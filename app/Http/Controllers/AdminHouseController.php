<?php

namespace App\Http\Controllers;

use App\House;
use App\Country;
use App\Paymentfrequency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\HouseFormRequest;

class AdminHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $from = \date_format(date_sub(date_create(date('Y-m-d')), date_interval_create_from_date_string('7 days')), 'Y-m-d');
        $to = date('Y-m-d', strtotime('+1 day'));
        $houses = House::whereBetween('created_at', [$from, $to])->get()->sortByDesc('created_at');
        
        return view('admin.houses.index', compact('houses'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //

        $request->validate([
            "from" => "bail|required|date",
            "to" => "required|date"
        ]);
        $from = \date_format(\date_create($request->input('from')), 'Y-m-d');
        $to = \date_format(date_add(\date_create($request->input('to')), date_interval_create_from_date_string('1 day')), 'Y-m-d');
        $houses = House::whereBetween('created_at', [$from, $to])->get()->sortByDesc('created_at');
        
        return view('admin.houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
          "countries" => Country::all(),
          "paymentfrequency" => Paymentfrequency::all()
        ];
        return view('admin.houses.create', compact('data'));
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
        $house = House::create([
            "houseLocation" => $request->input('houseLocation'),
            "streetCode" => $request->input('streetCode'),
            "housePrice" => $request->input('housePrice'),
            "paymentfrequency_id" => $request->input('payfreq'),
            "user_id" => Auth::user()->id,
            "cell" => $request->input('cell'),
            "sector_id" => $request->input('sector'),
            "district_id" => $request->input('district'),
            "province_id" => $request->input('province'),
            "country_id" => $request->input('country'),
            "fenced" => $request->input('fenced'),
            "water" => $request->input('water'),
            "toilet" => $request->input('toilet'),
            "bathroom" => $request->input('bathroom'),
            "numberOfRooms" => $request->input('rooms'),
            "length" => $request->input('length'),
            "width" => $request->input('width')
        ]);
        if ($house) {
          return redirect()->route('admin.uploads.create', $house->id)->with('success', 'House Created.');
        } else {
          return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show($house)
    {
        //
        $house = House::where('id', $house)->first();
        // die($house);
        return view('admin.houses.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit($house)
    {
        //
        $house = House::where('id', $house)->first();
        // die(print_r($house));
        $data = [
            "countries" => Country::all(),
            "paymentfrequency" => Paymentfrequency::all(),
            "house" => $house
          ];
        return view('admin.houses.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(HouseFormRequest $request, $id)
    {
        //
        // $id = $house->id;
        $house = House::where('id', $id)->update([
            "houseLocation" => $request->input('houseLocation'),
            "streetCode" => $request->input('streetCode'),
            "housePrice" => $request->input('housePrice'),
            "paymentfrequency_id" => $request->input('payfreq'),
            "user_id" => Auth::user()->id,
            "cell" => $request->input('cell'),
            "sector_id" => $request->input('sector'),
            "district_id" => $request->input('district'),
            "province_id" => $request->input('province'),
            "country_id" => $request->input('country'),
            "fenced" => $request->input('fenced'),
            "water" => $request->input('water'),
            "toilet" => $request->input('toilet'),
            "bathroom" => $request->input('bathroom'),
            "numberOfRooms" => $request->input('rooms'),
            "length" => $request->input('length'),
            "width" => $request->input('width')
        ]);
        if ($house) {
          return redirect()->route('admin.houses.show', $id)->with('success', 'House updated.');
        } else {
          return back()->withInput();
        }
    }

    public function updateStatus($house_id, $status) {
        $house = House::where('id', $house_id)->update([
            'status' => $status
        ]);
        if ($house) {
            return redirect()->route('admin.houses.show', $house_id)->with('House status updated.');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy($house)
    {
        //
        $house = House::find($house);
        if (!isset($house)) {
            return back()->withInput();
        }
        foreach($house->uploads as $upload) {
            $src = $upload->source;
            if ($upload->delete()) {
                @unlink(public_path('/images/HouseUploads/' . $src));
                @unlink(public_path('/images/large/' . $src));
            } else {
                return back()->withInput();
            }
        }
        if ($house->delete()) {
          return redirect()->route('admin.houses.index')->with('House deleted.');
        } else {
          return back()->withInput();
        }
    }
  
    /* Display delete confirmation page*/
    public function delete($id) {
      return view('admin.houses.delete', compact('id'));
    }
}
