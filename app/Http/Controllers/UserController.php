<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store', 'show']]);
    //     $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:user-edit', ['only' => ['edit', 'update', 'updatePassword']]);
    //     $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::select('id', 'name', 'email')->latest()->paginate(env('MAX_PAGINATION_VALUE'));
        return view("users.index", ['users' => $users]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view("users.create", ['roles' => $roles]);    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request)
    {
       
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        if ($request->hasFile("photo")) {
            $input['photo'] = $request->file("photo")->store("photos", "public");
        }
        $input['password'] = bcrypt($request->password);
        $user = User::create($input);
        if ($user) {
            $user->assignRole($request->input('roles'));
            return redirect()->route('users.index')->with('success','User has been deleted');
        } else {
            return back()->with("error", __("all.error_message"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find(decrypt($id));
        return view("users.show", ["user" => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $user = User::find(decrypt($id));
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view("users.edit", ['userRole' => $userRole, 'user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $input = $request->all();
        $user = User::find(decrypt($id));
        if ($request->hasFile("photo")) {
            if ($user->photo == null) {
                $input['photo'] = $request->file("photo")->store("photos", "public");
            } else {
                if (Storage::disk('public')->exists($user->photo)) {
                    unlink("storage/" . $user->photo);
                }
                $input['photo'] = $request->file("photo")->store("photos", "public");
            }
        }
        if ($user->update($input)) {
            // if ($request->user()->hasRole('Super-Admin')) {
                DB::table("model_has_roles")->where("model_id", $user->id)->delete();
                $user->assignRole($request->input('roles'));
            // }
            return redirect()->route('users.index')->with('success','User Updated Successfully');
        } else {
            return redirect()->route('users.index')->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id =  decrypt($request->deleted_id);
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('success','User has been deleted');
    }
}
