<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TotalProductDp;
use App\Models\DpNewArrivals;
use App\Models\TrusteeDp;

class DpNewArrivalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DpNewArrivals::all();
        return view('financial-administrative-directorate.depo.items.new-arrival-list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trustees = TrusteeDp::all();
        $products = TotalProductDp::all();
        return view('financial-administrative-directorate.depo.items.add-new-arrivals', compact('products' , 'trustees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $t_product = TotalProductDp::find($request->product);
        $t_product->quantity = $request->quantity;

        $item = new DpNewArrivals;
        $item->name = $request->name;
        $item->category = $request->category;
        $item->quantity = $request->quantity;
        $item->unit = $request->unit;
        $item->price = $request->price;
        $item->m_7 = $request->f_s_9;
        $item->order_no = $request->order_no;
        $item->date = $request->input('date');
        $item->related_office = $request->office;
        $item->taken_from = $request->taken_from;
        $item->trustee_id = $request->trustee;
        $item->total_products_id = $request->product;
        
        $t_product->save();
        $item->save();
        return redirect()->back();
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