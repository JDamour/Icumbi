<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use App\Http\Requests\ReportFormRequest;


class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $reports = Report::all();
        return view('reports.index', compact('reports'));
      //  return view('reports.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportFormRequest $request)
    {
        //
        $report = new Report(
        [
            'email' =>$request->get('email'),
            'subject' =>$request->get('subject'),
            'description'=>$request->get('description'),
            'house_id' =>1,                  
        ]);
        $report->save();
        
        return redirect()->back()->with('success', 'thanks for your report');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
        return view('reports.show', ['report'=>$report]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
        return view('reports.edit')->with('report', $report);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(ReportFormRequest $request, Report $report)
    {
        //
        $report = Report::where('id', $report->id)->first();
        $report->email = $request->get('email');
//        $report->subject = $request->get('subject');
        $report->description = $request->get('description');
        
        $report->save();
        
        return redirect()->back()->with('success', 'report update done successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
        $report->delete();
        return redirect()->back()->with('success', 'report deleted successful');
        
    }
}
