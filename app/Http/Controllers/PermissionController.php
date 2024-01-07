<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;




class PermissionController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:permission-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:permission-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $permissions = Permission::latest()->paginate(env('MAX_PAGINATION_VALUE'));
         return view('permissions.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $permission = Permission::create(['name' => $request->input('name')]);
        if ($permission) {
            return redirect()->route('permissions.index')->with('success','Permission Created successfully!');
        } else {
            return to_route('permissions')->with('error', 'something went wrong!!!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $id = decrypt($id);
        $permission =  Permission::find($id);
        return view('Permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id =  decrypt($id);
        $permission = Permission::find($id);
        $permission->update($request->all());
        if($permission){
            return redirect()->route('permissions.index')->with('success','Permission Updated Successfully');
        }else{
            return redirect()->route('permissions.index')->with('error','Something went wrong');
        }
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id =  decrypt($request->deleted_id);
        $permission = Permission::find($id)->delete();
        if($permission){
            return redirect()->route('permissions.index')->with('success','Permission Deleted Successfully');
        }

        return redirect()->route('permissions.index')->with('error','Something went wrong!!!');

        
    }
}
