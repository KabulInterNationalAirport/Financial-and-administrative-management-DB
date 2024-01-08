<?php

namespace App\Http\Controllers;

use App\Models\EstateOilCar;
use App\Models\EstateOilInquiry;
use App\Models\EstateOilStorage;
use Illuminate\Http\Request;

class EstateOilCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = EstateOilCar::all();
        $inqueries = EstateOilInquiry::all();
        $companies = EstateOilStorage::all();
        return view('financial-administrative-directorate.property.oil-estilams.oil-cars.cars-list' , compact('cars' , 'inqueries' , 'companies'));
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
        $car =new EstateOilCar;
        $inq = EstateOilInquiry::find($request->inquery);
        $com = EstateOilStorage::find($request->company);
        $car->driver = $request->driver;
        $car->father_name = $request->father_name;
        $car->id_card = $request->id_card;
        $car->vehicale_no = $request->car_no;
        $car->oil_total_valume = $request->oil_valume;
        $car->estate_oil_storages_id = $request->company;
        $car->estate_oil_inquiries_id = $request->inquery;

        $inq->car_numebr = $inq->car_numebr +1;
        $inq->oil_total_valume = $inq->oil_total_valume + $request->oil_valume;

        $com->oil_total_valume = $com->oil_total_valume + $request->oil_valume;
        $com->oil_remain_valume = $com->oil_remain_valume + $request->oil_valume;

        $car->save();
        $inq->save();
        $com->save();
        return redirect('estate-oil-cars');

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
        $car = EstateOilCar::find($id);
        return view('financial-administrative-directorate.property.oil-estilams.oil-cars.update-car' , compact('car'));
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
        $car = EstateOilCar::find($id);
        $car->driver = $request->driver;
        $car->father_name = $request->father_name;
        $car->id_card = $request->id_card;
        $car->vehicale_no = $request->car_no;
        $car->save();
        return redirect('estate-oil-cars');
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