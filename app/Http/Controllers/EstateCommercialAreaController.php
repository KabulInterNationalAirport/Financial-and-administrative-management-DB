<?php

namespace App\Http\Controllers;

use App\Models\ECAriaRent;
use App\Models\EstateCommercialArea;
use Illuminate\Http\Request;

class EstateCommercialAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = EstateCommercialArea::all();
        return view('financial-administrative-directorate.property.revenue.revenue-list' , compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.property.revenue.add-revenue');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new EstateCommercialArea;
        $item->contract_person = $request->contract_person;
        $item->monthly_rent = $request->monthly_rent;
        $item->area_mm = $request->area_mm;
        $item->location = $request->location;
        $item->start_date = $request->start_date;
        $item->end_date = $request->end_date;
        $item->contract_details = $request->contract_details;
        $item->activity_form = $request->activity_form;
        $item->state = $request->state;
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
        return redirect('estate-commircial-areas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = EstateCommercialArea::find($id);
        $rents = ECAriaRent::all();
        return view('financial-administrative-directorate.property.revenue.view-revenue-details', compact('item' , 'rents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = EstateCommercialArea::find($id);
        return view('financial-administrative-directorate.property.revenue.update-revenue', compact('item'));
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
        $item = EstateCommercialArea::find($id);
        $item->contract_person = $request->contract_person;
        $item->monthly_rent = $request->monthly_rent;
        $item->area_mm = $request->area_mm;
        $item->location = $request->location;
        $item->start_date = $request->start_date;
        $item->end_date = $request->end_date;
        $item->contract_details = $request->contract_details;
        $item->activity_form = $request->activity_form;
        $item->state = $request->state;
       
        $item->save();
        return redirect('estate-commircial-areas');
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