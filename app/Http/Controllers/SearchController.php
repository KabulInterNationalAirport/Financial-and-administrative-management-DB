<?php

namespace App\Http\Controllers;

use App\Models\OfficersAppointedEmp;
use App\Models\OfficersBalance;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function search(Request $request){
        $balances = OfficersBalance::all();
        $search = $request->search;
        

        $employees = OfficersAppointedEmp::where(function($query) use ($search){
            
            $query->where('name' , 'like' , "%$search%")
            ->orWhere('last_name' , 'like' , "%$search%")
            ->orWhere('father_name' , 'like' , "%$search%");
            
        })
        ->get();
        // return $search;
        return view('financial-administrative-directorate.officers-mang.org-stuff.Employee-list' , compact('employees' , 'balances' , 'search'));
    }
}