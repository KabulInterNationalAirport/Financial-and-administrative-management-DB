<?php

namespace App\Http\Controllers;

use App\Models\PyrollAppointedEmp;
use Illuminate\Http\Request;

class PyrollAppointedEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = PyrollAppointedEmp::all();
        return view('financial-administrative-directorate.payroll-management.org-stuff.employee-list', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.payroll-management.org-stuff.add-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new PyrollAppointedEmp;
        $emp->ps_name = $request->ps_name;
        $emp->ps_last_name = $request->ps_last_name;
        $emp->ps_father_name = $request->ps_father_name;
        $emp->en_name = $request->en_name;
        $emp->en_last_name = $request->en_last_name;
        $emp->en_father_name = $request->en_father_name;
        $emp->birth_date = $request->birth_date;
        $emp->appointment_date = $request->appointment_date;
        $emp->position_no = $request->position;
        $emp->degree = $request->degree;
        $emp->bank_card = $request->bank_card;
        $emp->phone = $request->phone;
        $emp->state = 'فعال';
        $this->validate($request, [
            'image' => 'file|image|required'
        ]);
        if($request->hasFile('image')){
            $fileNameWithEx = $request->file('image')->getClientOriginalName();
            $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
            $extesion = $request->file('image')->getClientOriginalExtension();
            $uploadName = 'fin_adm'. time() .'_report'.'.'.$extesion;
            $image = $request->file('image')->storeAs('public/report',$uploadName);
            $filetoUpload = 'storage/report/'.$uploadName;
        }
        else{
            $filetoUpload = 'storage/report/def.jpg';
        }
        $emp->employee_doc = $filetoUpload;
        $emp->save();
        return redirect('appointed-stuff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = PyrollAppointedEmp::find($id);
        return view('financial-administrative-directorate.payroll-management.org-stuff.print-doc', compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = PyrollAppointedEmp::find($id);
        return view('financial-administrative-directorate.payroll-management.org-stuff.edit-employee' , compact('employee'));
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
        $emp = PyrollAppointedEmp::find($id);
        $emp->ps_name = $request->ps_name;
        $emp->ps_last_name = $request->ps_last_name;
        $emp->ps_father_name = $request->ps_father_name;
        $emp->en_name = $request->en_name;
        $emp->en_last_name = $request->en_last_name;
        $emp->en_father_name = $request->en_father_name;
        $emp->birth_date = $request->birth_date;
        $emp->appointment_date = $request->appointment_date;
        $emp->position_no = $request->position;
        $emp->degree = $request->degree;
        $emp->bank_card = $request->bank_card;
        $emp->phone = $request->phone;
        $emp->state = $request->state;
        $this->validate($request, [
            'image' => 'file|image'
        ]);
        if($request->hasFile('image')){
            $fileNameWithEx = $request->file('image')->getClientOriginalName();
            $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
            $extesion = $request->file('image')->getClientOriginalExtension();
            $uploadName = 'fin_adm'. time() .'_report'.'.'.$extesion;
            $image = $request->file('image')->storeAs('public/report',$uploadName);
            $filetoUpload = 'storage/report/'.$uploadName;
        }
        else{
            $filetoUpload = 'storage/report/def.jpg';
        }
        $emp->employee_doc = $filetoUpload;
        $emp->save();
        return redirect('appointed-stuff');
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