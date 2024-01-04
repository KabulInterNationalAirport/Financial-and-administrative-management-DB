<?php

namespace App\Http\Controllers;

use App\Models\CamCarsDelivered;
use App\Models\CamDeliveredProducts;
use App\Models\CamItProDelivered;
use App\Models\CamOrgStuff;
use Illuminate\Http\Request;

class CamOrgStuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = CamOrgStuff::all();
        return view('financial-administrative-directorate.commodity-accounting-management.org-stuff.org-stuff-list' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.commodity-accounting-management.org-stuff.add-org-stuff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stuff = new CamOrgStuff;
        $stuff->name = $request->name;
        $stuff->father_name = $request->father_name;
        $stuff->job_title = $request->job_title;
        $stuff->related_office = $request->related_office;
        $stuff->appointment_date = $request->input('date');
        $stuff->save();
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
        $d_items = CamDeliveredProducts::all();
        $it_items = CamItProDelivered::all();
        $cars = CamCarsDelivered::all();
        $employee = CamOrgStuff::find($id);
        return view('financial-administrative-directorate.commodity-accounting-management.org-stuff.view-org-stuff-items' , compact('d_items' , 'it_items' , 'cars' , 'employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = CamOrgStuff::find($id);
        return view('financial-administrative-directorate.commodity-accounting-management.org-stuff.update-org-stuff' , compact('employee'));
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
        $employee = CamOrgStuff::find($id);
        $employee->name = $request->name;
        $employee->father_name = $request->father_name;
        $employee->job_title = $request->job_title;
        $employee->related_office = $request->related_office;
        $employee->save();
        return redirect('commodity-org-stuff');
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