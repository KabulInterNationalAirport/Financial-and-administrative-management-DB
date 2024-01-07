<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCode;
use App\Models\ProjectCode;
use App\Models\PyrollBudgetExpense;
use Illuminate\Http\Request;

class PyrollBudgetExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = PyrollBudgetExpense::all();
        return view('financial-administrative-directorate.payroll-management.expenses.expenses-list', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $codes = ProjectCode::all();
        $e_codes = ExpenseCode::all();
        return view('financial-administrative-directorate.payroll-management.expenses.add-expense' , compact('codes' , 'e_codes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new PyrollBudgetExpense;
        $code = ProjectCode::find($request->project_codes_id);
        $e_code = ExpenseCode::find($request->expense_codes_id);
        $item->received_type = $request->type;
        $item->amount = $request->amount;
        $item->year = $request->year;
        $item->month = $request->month;
        $item->based_on = $request->based_on;
        $item->number = $request->number;
        $item->date= $request->date;
        $item->project_codes_id = $request->project_codes_id;
        $item->expense_codes_id = $request->expense_codes_id;
        
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


        $code->remain_amount = $code->remain_amount - $request->amount;
        $code->expense_amount = $code->expense_amount + $request->amount;

        $e_code->expense_amount = $e_code->expense_amount + $request->amount;
        $e_code->save();
        $code->save();
        $item->save();
        return redirect('payroll-budget-expense');
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