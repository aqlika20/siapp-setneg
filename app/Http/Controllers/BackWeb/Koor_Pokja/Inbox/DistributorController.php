<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
use App\Pangkat;
use App\Periode;
use App\Role;
use App\Group;
use App\Helper;

use Carbon\Carbon;

class DistributorController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Inbox | JFKU | Distributor';
        $page_description = 'Distributor';
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        // dd($pengangkatans);

        $group_lists = Group::distinct()->get();
        
        $group_users = Group::select(
            'users.name as name',
            'users.nip as nip',
            'groups.name as group',
            'roles.name as role'
            )->join(
                'users', 'users.groups_id', '=', 'groups.id'
            )->join(
                'roles', 'users.roles_id', '=', 'roles.id'
        )->orderBy('role', 'ASC')->get();
            
        $group_roles = [];

        foreach($group_users as $user){
            // if(!isset($group_roles[$user->group])){
                $group_roles[$user->group][]=$user->role;
            // }
        }

        // dd($group_roles);


        return view('pages.koor_pokja.inbox.distributor', compact('page_title', 'page_description', 'currentUser', 'group_lists', 'group_users', 'group_roles', 'pengangkatans'));
    }

    public function store_group($id, Request $request) 
    {
        $input = $request->all();
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
            ['group_id' => $input['group']]
        );
        return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Success !!!']);
    }


}
