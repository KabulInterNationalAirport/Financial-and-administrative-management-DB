<?php

namespace App\Http\Controllers;

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