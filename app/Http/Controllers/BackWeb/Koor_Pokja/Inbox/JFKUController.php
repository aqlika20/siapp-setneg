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
use App\Catatan;
use App\Periode;
use App\Role;
use App\Group;
use App\Helper;

use Carbon\Carbon;

class JFKUController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Inbox | JFKU';
        $page_description = 'JFKU';
        $pengangkatans = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$proses],
            ['distributor_id', '=', null],
            ['group_id', '=', null]
        ])->get();

        $jfku_pendings = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$pending]
        ])->get();

        $jfku_tolaks = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$tolak]
        ])->get();

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


        return view('pages.koor_pokja.inbox.jfku', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'jfku_pendings', 'jfku_tolaks', 'group_lists', 'group_users', 'group_roles'));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();

        $notes = Catatan::where('jfku_id', $id)->get();

        if (!$verifikasi) {
            return redirect()->route('pages.koor_pokja.inbox.jfku')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'notes'));
    }

    public function store_proses($id, Request $request) 
    {
        $input = $request->all();
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
            ['status' => $input['proses']]
        );
        return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
    }

    public function store_pending($id, Request $request) 
    {
        $input = $request->all();
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
            ['status' => $input['pending']]
        );
        return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
    }

    public function store_tolak($id, Request $request) 
    {
        $input = $request->all();
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
            ['status' => $input['tolak']]
        );
        return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
    }

}
