<?php

namespace App\Http\Controllers;

use App\Uploads;
use App\House;
use Illuminate\Http\Request;
use App\Http\Requests\UploadsFormRequest;
use Image;

class AdminUploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($house)
    {
        $data = [
          "pics" =>Uploads::where('house_id', $house)->get(),
          "house_id" => $house
        ]; 
        return view('admin.uploads.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($house_id)
    {
        //
        return view('admin.uploads.create', compact('house_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadsFormRequest $request)
    {
        //
        $destinationPath = public_path('/images/HouseUploads');
        $large = public_path('/images/large/');
        
        foreach($request->photos as $photo) {
            $allowedfileExtension=['jpeg','jpg','png'];
            $extension = $photo->getClientOriginalExtension();
 
            $check=in_array($extension,$allowedfileExtension);

            if ($check) {
                $filename = time() . $photo->getClientOriginalName();
                //die($filename);
                $photo->move($destinationPath, $filename);
                copy($destinationPath.'/'.$filename, $large.$filename);
    
                $imagePath = $destinationPath.'/'.$filename;
                $image = Image::make($imagePath)->resize(970, 750)->save();
    
    
                Uploads::create([
                    "house_id" => $request->input('house_id'),
                    "name" => "image",
                    "title" => "image",
                    "source" => $filename
                ]);
            } else {
                return back()->withErrors(['The photos must be a file of type: jpeg, jpg, png.']);
            }
            
        }
        return redirect()->route('admin.uploads.index', $request->input('house_id'));
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
    public function destroy($uploads)
    {
        //
        $upload = Uploads::find($uploads);
        if ($upload) {
            $src = $upload->source;
            $house_id = $upload->house_id;
            if ($upload->delete()) {
                @unlink(public_path('/images/HouseUploads/' . $src));
                @unlink(public_path('/images/large/' . $src));
                return redirect()->route('admin.uploads.index', $house_id);
            } else {
                return back()->withInput();
            }
        }
    }
}
