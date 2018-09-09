<?php

namespace App\Http\Controllers;

use App\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 100;
        return view('views.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $res = [
            "ans" => $id,
        ];
        $ip = $_SERVER['REMOTE_ADDR'];
        $views = View::where('ip_address', $ip)->orderBy('created_at', 'desc')->first();
        if ($views) {
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($views->created_at);
            $time_diff = $latest_timestamp + (60 * 60 * 5);
            if ($time_diff < $current_timestamp) {
                $view = View::create([
                    "ip_address" => $ip,
                    "house_id" => $id
                ]);
                if ($view) {
                    $res = [
                        "status" => "success",
                    ];
                    echo json_encode($res);
                } else {
                    $res = [
                        "status" => "fail",
                    ];
                    echo json_encode($res);
                }
            } else {
                $res = [
                    "status" => "fail",
                ];
                echo json_encode($res);
            }
        } else {
            $view = View::create([
                "ip_address" => $ip,
                "house_id" => $id
            ]);
            if ($view) {
                $res = [
                    "status" => "success",
                ];
                echo json_encode($res);
            } else {
                $res = [
                    "status" => "fail",
                ];
                echo json_encode($res);
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function show(View $view, $id)
    {
        //
        $views = View::where('house_id', $id)->count();
        $res = [
            "size" => $views
        ];
        echo json_encode($res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function edit(View $view)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, View $view)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\View  $view
     * @return \Illuminate\Http\Response
     */
    public function destroy(View $view)
    {
        //
    }
}
