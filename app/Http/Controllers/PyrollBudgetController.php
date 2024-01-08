<?php

namespace App\Http\Controllers;

use App\Models\ProjectCode;
use App\Models\PyrollBudget;
use Illuminate\Http\Request;

class PyrollBudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = PyrollBudget::all();
        return view('financial-administrative-directorate.payroll-management.budgets.budget-list' , compact('budgets'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codes = ProjectCode::all();
        return view('financial-administrative-directorate.payroll-management.budgets.add-budget', compact('codes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item =new PyrollBudget;
        $code = ProjectCode::find($request->code);
        $item->budget_type = $request->type;
        $item->budget_name = $request->name;
        $item->amount = $request->amount;
        $item->date = $request->input('date');
        $item->year = $request->year;
        $item->month = $request->month;
        $this->validate($request, [
            'image' => 'file|image|required'
        ]);
        if($request->hasFile('image')){
            $fileNameWithEx = $request->file('image')->getClientOriginalName();
            $fielName = pathinfo($fileNameWithEx, PATHINFO_FILENAME);
            $extesion = $request->file('image')->getClientOriginalExtension();
            $uploadName = 'budget'. time() .'_report'.'.'.$extesion;
            $image = $request->file('image')->storeAs('public/report',$uploadName);
            $filetoUpload = 'storage/report/'.$uploadName;
        }
        else{
            $filetoUpload = 'storage/report/def.jpg';
        }
        $item->file = $filetoUpload;

        $item->project_codes_id = $request->code;
        $code->amount = $code->amount + $request->amount;
        $code->remain_amount = $code->remain_amount + $request->amount;
        $code->save();
        $item->save();
        return redirect('payroll-budget');
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