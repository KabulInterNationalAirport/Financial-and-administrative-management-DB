<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialAdmEmp;
use App\Models\TrusteeDp;

class FinancialAdmEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = FinancialAdmEmp::all();
        return view('financial-administrative-directorate.employee.Employee-list' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financial-administrative-directorate.employee.add-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->job == 'trustee' || $request->job == 'معتمید')
        {
            $trustee = new TrusteeDp;
            $trustee->name = $request->name;
            $trustee->last_name = $request->last_name;
            $trustee->email = $request->email;
            $trustee->related_office = $request->related_office;
            $trustee->job_title = $request->job;
            $trustee->id_card = $request->id_card;
            $trustee->phone = $request->mobile;
            $trustee->address = $request->address;
            $trustee->save();

        }

        $employee = new FinancialAdmEmp;
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
        return redirect('fin-adm-employee');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $employee = FinancialAdmEmp::find($id);
        return view('financial-administrative-directorate.employee.view-employee' , compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = FinancialAdmEmp::find($id);
       return view('financial-administrative-directorate.employee.update-emplyee' , compact('employee'));
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