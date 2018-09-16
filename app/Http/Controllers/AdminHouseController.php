<?php

namespace App\Http\Controllers;

use App\House;
use App\Country;
use App\Paymentfrequency;
use Illuminate\Http\Request;

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
        $houses = House::all();
        
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
    public function store(Request $request)
    {
        //
        $house = House::create([
            "houseLocation" => $request->input('houseLocation'),
            "streetCode" => $request->input('streetCode'),
            "housePrice" => $request->input('housePrice'),
            "paymentfrequency_id" => $request->input('payfreq'),
            "user_id" => 1,
            "cell_id" => $request->input('cell')
        ]);
        if ($house) {
          return redirect()->route('admin.uploads.create', $house->id);
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
    public function update(Request $request, $house)
    {
        //
        // $id = $house->id;
        $house = House::where('id', $house)->update([
            "houseLocation" => $request->input('houseLocation'),
            "streetCode" => $request->input('streetCode'),
            "housePrice" => $request->input('housePrice'),
            "paymentfrequency_id" => $request->input('payfreq'),
            "user_id" => 1,
            "cell_id" => $request->input('cell')
        ]);
        if ($house) {
          return redirect()->route('admin.houses.show', $id);
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
            } else {
                return back()->withInput();
            }
        }
        if ($house->delete()) {
          return redirect()->route('admin.houses.index');
        } else {
          return back()->withInput();
        }
    }
  
    /* Display delete confirmation page*/
    public function delete($id) {
      return view('admin.houses.delete', compact('id'));
    }
}
