<?php

namespace App\Http\Controllers;

use App\Models\OfficersAppointedEmp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\OfficersBalance;
session_start();

class OfficersBalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atts = ['ضروری', 'تفریحی', 'مریضی'];
        foreach ($atts as $att) {
            $new = new OfficersBalance;
            $new->balance_name = $att;
            $new->total_days = 20;
            $new->remain_days = 20;
            $new->used_days = 0;
            $new->officers_appointed_emps_id = $request->name;
            $new->save();
        }
        $emps = OfficersBalance::all();
        foreach($emps as $emp){
           
            if($emp->officers_appointed_emps_id == $request->name){
                
                if($emp->balance_name == 'مریضی'){
                    $emp->used_days = $request->sickness;
                    $emp->remain_days = $emp->total_days - $request->sickness;
                    $emp->save();
                }
                if($emp->balance_name == 'تفریحی'){
                    $emp->used_days = $request->picnic;
                    $emp->remain_days = $emp->total_days - $request->sickness;
                    $emp->save();
                }
                else{
                    $emp->used_days = $request->important;
                    $emp->remain_days = $emp->total_days - $request->sickness;
                    $emp->save();
                }
            }
            
        }
        
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
        $idd = OfficersBalance::find($id);
        return view('financial-administrative-directorate.officers-mang.org-stuff.stuff-balance' , compact('idd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $atts = ['ضروری', 'تفریحی', 'مریضی'];
        $exists1 = DB::table('officers_balances')->where('officers_appointed_emps_id', $id)->exists();
        if ($exists1){
            return redirect()->back();
        }
        else{
            // foreach ($atts as $att) {
            //     $new = new OfficersBalance;
            //     $new->balance_name = $att;
            //     $new->total_days = 20;
            //     $new->remain_days = 20;
            //     $new->used_days = 0;
                
            //     $new->officers_appointed_emps_id = $id;
            //     $new->save();
            // }
            // return redirect()->back();
            $emp = OfficersAppointedEmp::find($id);
            return view('financial-administrative-directorate.officers-mang.org-stuff.add-balance' , compact('emp'));
        }
        
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

        $bilance = OfficersBalance::find($id);
        if($bilance->remain_days==0 || $request->balance == 0){
            $_SESSION['danger'] = 'شما به کافي اندازه روزهای باقی مانده ندارین!!!!';
            return redirect('officer-stuff');

        }
        if($request->balance <= $bilance->remain_days){
            $_SESSION['status'] = 'پروسیس به موافقیت انجام ګردید!!!';

            $bilance->remain_days = $bilance->remain_days - $request->balance;
            $bilance->used_days = $bilance->used_days + $request->balance;
            $bilance->save();
            return view('financial-administrative-directorate.officers-mang.org-stuff.print-doc');
        }
        else{
            $_SESSION['danger'] = 'دوباره امتحان کنید !!!';

            return redirect('officer-stuff');
        }
        
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