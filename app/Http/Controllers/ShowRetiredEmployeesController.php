<?php

namespace App\Http\Controllers;

use App\Models\PyrollAppointedEmp;
use Illuminate\Http\Request;

class ShowRetiredEmployeesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $employees = PyrollAppointedEmp::all();
        return view('financial-administrative-directorate.payroll-management.retired-deceased-employees.employee-list' , compact('employees'));
    }
}