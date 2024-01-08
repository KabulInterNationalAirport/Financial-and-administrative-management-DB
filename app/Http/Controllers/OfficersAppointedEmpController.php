<?php

namespace App\Http\Controllers;

use App\Models\OfficersAppointedEmp;
use App\Models\OfficersBalance;
use Illuminate\Http\Request;

class OfficersAppointedEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balances = OfficersBalance::all();
        $employees = OfficersAppointedEmp::all();
        return view('financial-administrative-directorate.officers-mang.org-stuff.Employee-list', compact('employees' , 'balances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.officers-mang.org-stuff.add-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new OfficersAppointedEmp;
        $emp->name = $request->name;
        $emp->last_name = $request->last_name;
        $emp->father_name = $request->father_name;
        $emp->birth_date = $request->birth_date;
        $emp->appointment_date = $request->app_date;
        $emp->position_no = $request->position;
        $emp->degree = $request->degree;
        $emp->bank_card = $request->bank_card;
        $emp->phone = $request->phone;
        $emp->state = 'فعال';

        $emp->save();
        return redirect('officer-stuff');
        
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