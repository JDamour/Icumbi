<?php

namespace App\Http\Controllers;

use App\House;
use App\Country;
use App\Paymentfrequency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\HouseFormRequest;

class OwnerHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $houses = Auth::user()->house;
        
        return view('houseOwner.houses.index', compact('houses'));
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
        return view('houseOwner.houses.create', compact('data'));
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
          return redirect()->route('owner.uploads.create', $house->id)->with('success', 'House created.');
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
    public function show(House $house)
    {
        //
        $house = House::where([
            ['id', $house->id],
            ['user_id', Auth::user()->id]])->first();
        return view('houseOwner.houses.show', compact('house'));
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
        $house = House::where([
            ['id', $house->id],
            ['user_id', Auth::user()->id]])->first();
        $data = [
            "countries" => Country::all(),
            "paymentfrequency" => Paymentfrequency::all(),
            "house" => $house
          ];
        return view('houseOwner.houses.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(HouseFormRequest $request, House $house)
    {
        //
        $id = $house->id;
        $house = House::where([
            ['id', $house->id],
            ['user_id', Auth::user()->id]])->update([
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
          return redirect()->route('houses.show', $id)->with('House updated.');
        } else {
          return back()->withInput();
        }
    }

    public function updateStatus($house_id, $status) {
        $house = House::where('id', $house_id)->update([
            'status' => $status
        ]);
        if ($house) {
            return true;
        } else {
            return false;
        }
    }

    public function putHouseOnHold($house_id) {
        $house = House::where('id', $house_id)->first();
        if ($house->status == 2) {
            if ($this->updateStatus($house_id, 5)) {
                return back()->with('success', 'House is offline');
            } else {
                return back()->withErrors(['An error occurred while performing your request. Plese report to customer care.']);
            }
        } else {
            return back()->withErrors(['Sorry, you are not allowed to perform this task.']);
        }        
    }
    public function getHouseFromHold($house_id) {
        $house = House::where('id', $house_id)->first();
        if ($house->status == 5) {
            if ($this->updateStatus($house_id, 2)) {
                return back()->with('success', 'House is back online');
            } else {
                return back()->withErrors(['An error occurred while performing your request. Plese report to customer care.']);
            }
        } else {
            return back()->withErrors(['Sorry, you are not allowed to perform this task.']);
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
        $house = House::where([
            ['id', $house->id],
            ['user_id', Auth::user()->id]])->first();;
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
          return redirect()->route('houses.index')->with('House deleted.');
        } else {
          return back()->withInput();
        }
    }
  
    /* Display delete confirmation page*/
    public function delete($id) {
      return view('houseOwner.houses.delete', compact('id'));
    }
}
