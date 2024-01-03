<?php

namespace App\Http\Controllers;

use App\Models\DpItProducts;
use App\Models\TotalProductDp;
use App\Models\TrusteeDp;
use Illuminate\Http\Request;

class TotalProductDpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DpItProducts::all();
        return view('financial-administrative-directorate.depo.items.it-product-list' , compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = TrusteeDp::all();
        $t_products = TotalProductDp::all();
        return view('financial-administrative-directorate.depo.items.add-it-new-arrivals' , compact('employees' , 't_products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new DpItProducts;
        $item->category = $request->category;
        $item->name = $request->name;
        $item->quantity = $request->quantity;
        $item->unit = $request->unit;
        $item->price = $request->price;
        $item->serial_no = $request->serial_no;
        $item->ram = $request->ram;
        $item->related_office = $request->related_office;
        $item->no_m7 = $request->m_7;
        $item->number = $request->order_number;
        $item->taken_from = $request->taken_from;
        $item->hd = $request->hd;
        $item->trustee_id = $request->trustee;
        $item->total_products_id = $request->total_product;
        $item->save();
        return redirect('depo-it-product');
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