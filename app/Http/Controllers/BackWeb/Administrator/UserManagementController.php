<?php

namespace App\Http\Controllers\BackWeb\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserManagement;
use App\Role;
use App\Group;
use App\Helper;


class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Administrator | inbox | Usulan';
        $page_description = 'Inbox';

        $users = UserManagement::All();
        $roles = Role::All();
        $groups = Group::All();

        return view('pages.administrator.user_management', compact('page_title', 'page_description', 'currentUser', 'users', 'roles', 'groups' ));
    }

    public function store(Request $request) 
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'nip' => 'required|max:18',
            'password' => 'required|confirmed',
            'role' => 'required'
        ]);
        
        // dd($validator->fails());
        if ($validator->fails())
        {
            return redirect()->route('administrator.user-management.index')->with(['error'=>'Data tidak valid.1']);
        }
        if (empty(trim(Role::find($input['role']))))
        {
            return redirect()->route('administrator.user-management.index')->with(['error'=>'Data tidak valid.2']);
        }

        $input['password'] = Hash::make($input['password']);
        $input['remember_token'] = Helper::generateRandomString('remember_token', 60);
        // dd($input);

        // UserManagement::create($input);

        $users = UserManagement::create([
            'name' =>$input['name'],
            'nip' => $input['nip'],
            'password' => $input['password'],
            'roles_id' => $input['role'],
            'groups_id' => $input['group'],
            'remember_token'=>$input['remember_token']
            
        ]);
        return redirect()->route('administrator.user-management.index')->with(['success'=>'User Berhasil Ditambahkan!']);
    }

    public function view($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Administrator | User Management';
        $page_description = 'Edit User';
        $user = UserManagement::find($id);
        $roles = Role::All();
        $groups = Group::All();

        if (!$user) {
            return redirect()->route('administrator.user-management.index')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('pages.administrator.user_management_edit', compact('page_title', 'page_description', 'currentUser', 'user', 'roles', 'groups'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'nip' => 'required',
            'password' => 'nullable',
            'role' => 'required',
            'group' => 'nullable'
        ]);

        if ($validator->fails())
        {
            return redirect()->route('administrator.user-management.index')->with(['error'=>'Data tidak valid.']);
        }
        else if (empty(trim(Role::find($data['role']))))
        {
            return redirect()->route('administrator.user-management.index')->with(['error'=>'Data tidak valid.']);
        }

        

        $user = UserManagement::where([
            ['id', '=', $id]
        ])->first();
        if (!$user) {
            return redirect()->route('administrator.user-management.index')->with(['error'=>'Parameter id tidak valid.']);
        }

        $user->name = $data['name'];
        $user->nip = $data['nip'];
        $user->roles_id = $data['role'];
        $user->groups_id = $data['group'];
        if (!empty(trim($data['password']))) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        return redirect()->route('administrator.user-management.index')->with(['success'=>'Data diedit.']);
    }

    public function delete($id) 
    {
        $user = UserManagement::where([
            ['id', '=', $id]
        ])->first();
        if (!$user) {
            return redirect()->route('administrator.user-management.index')->with(['error'=>'Parameter id tidak valid.']);
        }
        UserManagement::where('id', $id)->delete();
        return redirect()->route('administrator.user-management.index')->with(['success'=>'Data dihapus.']);
    }

}
