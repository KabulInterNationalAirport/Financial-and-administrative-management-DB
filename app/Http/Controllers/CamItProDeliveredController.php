<?php

namespace App\Http\Controllers;

use App\Models\CamItProDelivered;
use App\Models\TotalProductDp;
use Illuminate\Http\Request;

class CamItProDeliveredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $it_items = CamItProDelivered::all();
        return view('financial-administrative-directorate.commodity-accounting-management.products.delivered-it-products' , compact('it_items'));
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
        $item = new CamItProDelivered();
        $item->name = $request->name;
        $item->category = $request->category;
        $item->quantity = $request->quantity;
        $item->serial_no = $request->serial_no;
        $item->ram = $request->ram;
        $item->hd = $request->hd;
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