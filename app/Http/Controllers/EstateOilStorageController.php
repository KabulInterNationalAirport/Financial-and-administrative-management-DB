<?php

namespace App\Http\Controllers;

use App\Models\EstateOilStorage;
use Illuminate\Http\Request;

class EstateOilStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = EstateOilStorage::all();
        return view('financial-administrative-directorate.property.oil-estilams.oil-company-qarar-dad.list-oil-qarar-dad' , compact('items'));
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
        $item = new EstateOilStorage;
        $item->company_name = $request->company_name;
        $item->area_mm = $request->area_mm;
        $item->location = $request->location;
        $item->start_date = $request->start_date;
        $item->end_date = $request->end_date;
        $item->oil_total_valume = 0;
        $item->oil_remain_valume = 0;
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
        $item->contract_img = $filetoUpload;
        $item->save();
        return redirect('estate-oil-storage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = EstateOilStorage::find($id);
        return view('financial-administrative-directorate.property.oil-estilams.oil-company-qarar-dad.print-oil-qarar-dad' , compact('item'));
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