<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DpCars;
use App\Models\TrusteeDp;
use App\Models\TotalProductDp;

class DpCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = DpCars::all();
        return view('financial-administrative-directorate.depo.cars.cars-list', compact('cars' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = TotalProductDp::all();
        $employees = TrusteeDp::all();
        return view('financial-administrative-directorate.depo.cars.add-car' , compact('employees', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new DpCars;
        $pro = TotalProductDp::find($request->t_product);
        $pro->quantity =$pro->quantity+ $request->quantity;
        $car->name = $request->name;
        $car->model = $request->model;
        $car->engine_no = $request->engine_no;
        $car->unit = $request->unit;
        $car->price = $request->price;
        $car->quantity = $request->quantity;
        $car->color = $request->color;
        $car->no_palet = $request->no_palet;
        $car->trustee_id = $request->trustee;
        $car->total_products_id = $request->t_product;
        $car->save();
        $pro->save();
        return redirect('depo-car');
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
        $trustees = TrusteeDp::all();
        $products = TotalProductDp::all();
        $car = DpCars::find($id);
        return view('financial-administrative-directorate.depo.cars.update-car', compact('car' , 'trustees' , 'products'));
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
        $car = DpCars::find($id);
        $car->name = $request->name;
        $car->model = $request->model;
        $car->engine_no = $request->engine_no;
        $car->unit = $request->unit;
        $car->price = $request->price;
        $car->quantity = $request->quantity;
        $car->color = $request->color;
        $car->no_palet = $request->no_palet;
        $car->trustee_id = $request->trustee;
        $car->total_products_id = $request->t_product;
        $car->save();
        return redirect('depo-car');
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