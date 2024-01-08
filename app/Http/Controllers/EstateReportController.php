<?php

namespace App\Http\Controllers;

use App\Models\EstateContract;
use App\Models\FinancialAdmReport;
use Illuminate\Http\Request;

class EstateReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = FinancialAdmReport::all();
        return view('financial-administrative-directorate.property.report', compact('reports'));
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
    public function store(Request $request)
    {
        $reprot = new FinancialAdmReport;
        $reprot->task = $request->task;
        $reprot->related_office = $request->office;
        $reprot->task_details = $request->taskdetails;
        $reprot->state = $request->state;
        $this->validate($request, [
            'image' => 'file|image|required'
        ]);
        if($request->hasFile('image')){
            $fileNameWithEx = $request->file('image')->getClientOriginalName();
            $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
            $extesion = $request->file('image')->getClientOriginalExtension();
            $uploadName = 'fin_adm'. time() .'_report'.'.'.$extesion;
            $image = $request->file('image')->storeAs('public/report',$uploadName);
            $filetoUpload = 'storage/report/'.$uploadName;
        }
        else{
            $filetoUpload = 'storage/report/def.jpg';
        }
        $reprot->file = $filetoUpload;
        $reprot->save();
        return redirect('estate-report');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = EstateContract::find($id);
        return view('financial-administrative-directorate.property.qrardads.print-qarar-dad' , compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = FinancialAdmReport::find($id);
        return view('financial-administrative-directorate.property.update-report', compact('report'));
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
        $report = FinancialAdmReport::find($id);
        $report->task = $request->task;
        $report->related_office = $request->office;
        $report->task_details = $request->taskdetails;
        $report->state = $request->state;

        $this->validate($request, [
            'image' => 'file|image|required'
        ]);
        if($request->hasFile('image')){
            $fileNameWithEx = $request->file('image')->getClientOriginalName();
            $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
            $extesion = $request->file('image')->getClientOriginalExtension();
            $uploadName = 'fin_adm'. time() .'_report'.'.'.$extesion;
            $image = $request->file('image')->storeAs('public/report',$uploadName);
            $filetoUpload = 'storage/report/'.$uploadName;
        }
        else{
            $filetoUpload = 'storage/report/def.jpg';
        }
        $report->file = $filetoUpload;
        $report->save();
        return redirect('estate-report');
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