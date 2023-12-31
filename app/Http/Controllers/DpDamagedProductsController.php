<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrusteeDp;
use App\Models\CamOrgStuff;
use App\Models\CamDeliveredProducts;
use App\Models\DpDamagedProducts;

class DpDamagedProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trustees = TrusteeDp::all();
        $d_products = CamDeliveredProducts::all();
        $employees = CamOrgStuff::all();
        $items = DpDamagedProducts::all();
        return view('financial-administrative-directorate.depo.items.damaged-items' , compact('trustees' , 'employees' , 'd_products' , 'items'));
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
        $item = new DpDamagedProducts;
        $item->name = $request->name;
        $item->category = $request->category;
        $item->quantity = $request->quantity;
        $item->unit = $request->unit;
        $item->price = $request->price;
        $item->delivered_emp = $request->employee_name;
        $item->related_office = $request->office;
        $item->trustee_id = $request->trustee;
        $item->cam_org_stuff_id = $request->employee;
        $item->save();
        return redirect('damage-product');

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