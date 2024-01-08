<?php

namespace App\Http\Controllers;

use App\Models\CamCarsDelivered;
use App\Models\CamDeliveredProducts;
use App\Models\CamItProDelivered;
use App\Models\CamOrgStuff;
use Illuminate\Http\Request;
use App\Http\Requests\CamOrgStuffRequest;

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
    public function store(CamOrgStuffRequest $request)
    {       
        $validatedData = $request->validated();

        CamOrgStuff::create([
            'name' => $validatedData['name'],
            'father_name' => $validatedData['father_name'],
            'job_title' => $validatedData['job_title'],
            'related_office' => $validatedData['related_office'],
            'appointment_date' => $validatedData['appointment_date'],


        ]);
    
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
    public function update(CamOrgStuffRequest $request, $id)
    {
        $validatedData = $request->validated();
        $employee = CamOrgStuff::find($id);
        $employee->name = $validatedData['name'];
        $employee->father_name = $validatedData['father_name'];
        $employee->job_title = $validatedData['job_title'];
        $employee->related_office = $validatedData['related_office'];
        $employee->appointment_date = $validatedData['appointment_date'];
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