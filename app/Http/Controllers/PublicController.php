<?php

namespace App\Http\Controllers;

use App\House;
use App\Country;
use App\Paymentfrequency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();
        return view('client.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $search = Input::get('search');
        if ($search != "") {
            $house = House::where('houselocation','LIKE','%'.$search.'%')
            ->orWhere('housePrice','LIKE','%'.$search.'%')
            ->orWhere('paymentfrequency_id','LIKE','%'.$search.'%')
            ->get();
        if(count($house)>0)
            return view('client.search')->withDetails($house)->withQuery ( $search );

        }
        return view('client.search')->withMessage("No results found " );
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
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
