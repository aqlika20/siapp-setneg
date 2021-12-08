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
            'role' => 'required',
            'group' => 'required'
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
}
