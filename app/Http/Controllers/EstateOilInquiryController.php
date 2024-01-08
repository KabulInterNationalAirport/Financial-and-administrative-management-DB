<?php

namespace App\Http\Controllers;

use App\Models\EstateOilInquiry;
use Illuminate\Http\Request;

class EstateOilInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = EstateOilInquiry::all();
        return view('financial-administrative-directorate.property.oil-estilams.list-estilam', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.property.oil-estilams.add-estilam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new EstateOilInquiry;
        $item->date = $request->date;
        $item->car_numebr = 0;
        $item->oil_total_valume = 0;
        $item->company_name = $request->company;
        $item->follow_person = $request->follow_person;
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
        $item->inquiry_img = $filetoUpload;
        $item->save();
        return redirect('estate-oil-inquery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = EstateOilInquiry::find($id);
        return view('financial-administrative-directorate.property.oil-estilams.print-estilam' , compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = EstateOilInquiry::find($id);
        return view('financial-administrative-directorate.property.oil-estilams.update-estilam' , compact('contract'));
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
        $item = EstateOilInquiry::find($id);
        $item->date = $request->date;
        $item->company_name = $request->company;
        $item->follow_person = $request->follow_person;
        // $this->validate($request, [
        //     'image' => 'file|image|required'
        // ]);
        // if($request->hasFile('image')){
        //     $fileNameWithEx = $request->file('image')->getClientOriginalName();
        //     $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
        //     $extesion = $request->file('image')->getClientOriginalExtension();
        //     $uploadName = 'fin_adm'. time() .'_report'.'.'.$extesion;
        //     $image = $request->file('image')->storeAs('public/report',$uploadName);
        //     $filetoUpload = 'storage/report/'.$uploadName;
        // }
        // else{
        //     $filetoUpload = 'storage/report/def.jpg';
        // }
        // $item->inquiry_img = $filetoUpload;
        $item->save();
        return redirect('estate-oil-inquery');
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