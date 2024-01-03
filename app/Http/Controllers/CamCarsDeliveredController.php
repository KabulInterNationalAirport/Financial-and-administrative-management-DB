<?php

namespace App\Http\Controllers;

use App\Models\CamCarsDelivered;
use App\Models\CamOrgStuff;
use App\Models\TotalProductDp;
use Illuminate\Http\Request;

class CamCarsDeliveredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = CamCarsDelivered::all();
        return view('financial-administrative-directorate.commodity-accounting-management.products.delivered-cars' , compact('cars'));
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
        
        $total_product = TotalProductDp::find($request->product);
        $total_product->quantity = $total_product->quantity - $request->quantity;
        $item = new CamCarsDelivered();
        $item->name = $request->name;
        $item->color = $request->color;
        $item->no_palet = $request->no_palet;
        $item->quantity = $request->quantity;
        $item->model = $request->model;
        $item->engine_no = $request->engine_no;
        $item->unit = $request->unit;
        $item->price = $request->price;
        $item->order_office = $request->offer_office;
        $item->based_on = $request->based_on;
        $item->number = $request->number;
        $item->delivered_date = $request->delivered_date;
        $item->order_date = $request->offer_date;
        $item->cam_org_stuff_id = $request->employee;
        $item->total_products_id = $request->product;
        
        $this->validate($request, [
            'image' => 'file|image|required'
        ]);
        if($request->hasFile('image')){
            $fileNameWithEx = $request->file('image')->getClientOriginalName();
            $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
            $extesion = $request->file('image')->getClientOriginalExtension();
            $uploadName = 'commodity'. time() .'_product'.'.'.$extesion;
            $image = $request->file('image')->storeAs('public/commodity/products',$uploadName);
            $filetoUpload = 'storage/commodity/proudcts/'.$uploadName;
        }
        else{
            $filetoUpload = 'storage/commodity/proudcts/def.jpg';
        }
        $item->file = $filetoUpload;
        $item->save();
        $total_product->save();
        return redirect('commodity-org-stuff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // this method is used instead of create method above
        $emp = CamOrgStuff::find($id);
        $t_products = TotalProductDp::all();
        return view('financial-administrative-directorate.commodity-accounting-management.products.reg-car' ,compact('emp' , 't_products'));
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