<?php

namespace App\Http\Controllers\BackWeb\SuperAdmin;

use App\UserManagement;
use App\Role;
use App\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Super Admin | User Management';
        $page_description = 'All User List';
        $users = UserManagement::All();
        return view('pages.super_admin.user_management', compact('page_title', 'page_description', 'currentUser', 'users'));
    }

    public function create(Request $request) 
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'roles_id' => 'required|numeric'
        ]);

        if ($validator->fails())
        {
            return redirect()->route('super-admin.user-management.index')->with(['error'=>'Data not valid.']);
        }
        else if (empty(trim(Role::find($data['roles_id']))))
        {
            return redirect()->route('super-admin.user-management.index')->with(['error'=>'Data not valid.']);
        }

        $data['password'] = Hash::make($data['password']);
        $data['api_token'] = Helper::generateRandomString('api_token', 60);

        UserManagement::create($data);
        return redirect()->route('super-admin.user-management.index')->with(['success'=>'Data created.']);
    }

    public function view($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Super Admin | User Management';
        $page_description = 'Edit User';
        $user = UserManagement::find($id);
        if (!$user) {
            return redirect()->route('super-admin.user-management.index')->with(['error'=>'Invalid parameter id.']);
        }
        return view('pages.super_admin.user_management_edit', compact('page_title', 'page_description', 'currentUser', 'user'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'roles_id' => 'required|numeric',
            'password' => 'nullable|string|min:8',
        ]);

        if ($validator->fails())
        {
            return redirect()->route('super-admin.user-management.index')->with(['error'=>'Data not valid.']);
        }
        else if (empty(trim(Role::find($data['roles_id']))))
        {
            return redirect()->route('super-admin.user-management.index')->with(['error'=>'Data not valid.']);
        }

        

        $user = UserManagement::where([
            ['id', '=', $id]
        ])->first();
        if (!$user) {
            return redirect()->route('super-admin.user-management.index')->with(['error'=>'Invalid parameter id.']);
        }

        $user->name = $data['name'];
        $user->roles_id = $data['roles_id'];
        if (!empty(trim($data['password']))) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        return redirect()->route('super-admin.user-management.index')->with(['success'=>'Data edited.']);
    }

    public function delete($id) 
    {
        $user = UserManagement::where([
            ['id', '=', $id]
        ])->first();
        if (!$user) {
            return redirect()->route('super-admin.user-management.index')->with(['error'=>'Invalid parameter id.']);
        }
        UserManagement::where('id', $id)->delete();
        return redirect()->route('super-admin.user-management.index')->with(['success'=>'Data deleted.']);
    }

}
