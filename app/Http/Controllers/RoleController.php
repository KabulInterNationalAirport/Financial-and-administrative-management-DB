<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index', 'store', 'show']]);
    //     $this->middleware('permission:role-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:role-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->paginate(env('MAX_PAGINATION_VALUE'));
        return view("roles.index", ['roles' => $roles]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $permissions = Permission::get();
        return view("roles.create", ['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->input('name')])->syncPermissions($request->input('permission'));
        if ($role) {
            return redirect()->route('roles.index')->with('success','Role Created successfully');
        } else {
            return back()->with('error','Something went wrong');
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
        $role=Role::find(decrypt($id));
        if (!is_null($role)) {
            $rolepermissions = $role->permissions->pluck('id')->toArray();
        }
        $permissions = Permission::all();
        return view("roles.edit", ['permissions' => $permissions, 'role' => $role, 'rolepermissions' => $rolepermissions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role=Role::find(decrypt($id));
        $role->name = $request->input('name');
        $role->syncPermissions($request->input('permission'));
        $role->save();
        return redirect()->route('roles.index')->with('success', 'Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
         $id=decrypt($request->deleted_id);
        $role=Role::find($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role has been deleted successfully');
    }
}
