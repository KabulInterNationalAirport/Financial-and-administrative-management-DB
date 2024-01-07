<?php

namespace App\Http\Controllers;

use App\Models\EstateContract;
use Illuminate\Http\Request;

class EstateContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = EstateContract::all();
        return view('financial-administrative-directorate.property.qrardads.list-qarar-dads', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.property.qrardads.add-qarar-dad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new EstateContract;
        $d->contract = $request->contract;
        $d->contract_no = $request->contract_no;
        $d->contract_reason = $request->contract_reason;
        $d->contract_details = $request->contract_details;
        $d->company = $request->company;
        $d->executer_num = $request->executer_num;
        $d->start_date = $request->start_date;
        $d->end_date = $request->end_date;
        $d->state = $request->state;
        $d->area_mm = $request->area_mm;
        $d->location = $request->location;
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
        $d->contract_img = $filetoUpload;
        $d->save();
        return redirect('estate-contract');
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
        return view('financial-administrative-directorate.property.qrardads.details-qarar-dad' , compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = EstateContract::find($id);
        return view('financial-administrative-directorate.property.qrardads.update-qarar-dad' , compact('contract'));
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
        $d = EstateContract::find($id);
        $d->contract = $request->contract;
        $d->contract_no = $request->contract_no;
        $d->contract_reason = $request->contract_reason;
        $d->contract_details = $request->contract_details;
        $d->company = $request->company;
        $d->executer_num = $request->executer_num;
        $d->start_date = $request->start_date;
        $d->end_date = $request->end_date;
        $d->state = $request->state;
        $d->area_mm = $request->area_mm;
        $d->location = $request->location;
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
        $d->contract_img = $filetoUpload;
        $d->save();
        return redirect('estate-contract');
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