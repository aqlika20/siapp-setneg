<?php

namespace App\Http\Controllers\BackWeb\SuperAdmin\Setting;

use App\UserManagement;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Super Admin | Setting | Role';
        $page_description = 'All Role List';
        $roles = Role::All();
        return view('pages.super_admin.setting.role', compact('page_title', 'page_description', 'currentUser', 'roles'));
    }

}
