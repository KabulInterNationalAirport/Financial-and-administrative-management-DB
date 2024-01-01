<?php

namespace App\Http\Controllers;

use App\Models\DepoEmp;
use Illuminate\Http\Request;

class DepoEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employees = DepoEmp::all();
        return view('financial-administrative-directorate.depo.employee.employee-list' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.depo.employee.add-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new DepoEmp();
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->related_office = $request->related_office;
        $employee->id_card = $request->id_card;
        $employee->appointment_date = $request->input('date');
        $employee->degree = $request->degree;
        $employee->phone = $request->mobile;
        $employee->job_title = $request->job;
        $employee->material_state  = $request->mـstate;
        $employee->gender = $request->gender;
        $employee->address = $request->address;

        // this is for adding profile pic 
        
        // if($request->hasFile('profile_image')){
        //     $fileNameWithEx = $request->file('profile_image')->getClientOriginalName();
        //     $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
        //     $extesion = $request->file('profile_image')->getClientOriginalExtension();
        //     $uploadName = 'fin_adm'. time() .'_employee'.'.'.$extesion;
        //     $image = $request->file('profile_image')->storeAs('public/employee',$uploadName);
        //     $filetoUpload = 'storage/employee/'.$uploadName;
        // }
        // else{
        //     $filetoUpload = 'storage/employee/def.png';
        // }
        

        // $employee->profil_pic = $filetoUpload;

        // this is for adding documents pictures
        if($request->hasFile('doc_images')){
            $fileNameWithEx = $request->file('doc_images')->getClientOriginalName();
            $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
            $extesion = $request->file('doc_images')->getClientOriginalExtension();
            $uploadName = 'fin_adm'. time() .'_employee_doc'.'.'.$extesion;
            $image = $request->file('doc_images')->storeAs('public/employee-doc',$uploadName);
            $filetoUpload1 = 'storage/employee-doc/'.$uploadName;
        }
        else{
            $filetoUpload1 = 'storage/employee-doc/def.jpg';
        }
        $employee->degree_pics = $filetoUpload1;

        $employee->save();
        return redirect('depo-employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = DepoEmp::find($id);
        return view('financial-administrative-directorate.depo.employee.view-employee', compact('employee'));
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