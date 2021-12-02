<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\RKP;
use App\Pangkat;
use App\Penolakan;
use App\Unsur;
use App\Catatan;
use App\Periode;
use App\Jabatan;
use App\Role;
use App\Group;
use App\Helper;

use Carbon\Carbon;

class ListRkpController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | RKP';
        $page_description = 'RKP';
        $rkps = RKP::All();
        // $rkps = RKP::where([
        //     ['id_layanan', '=', Helper::$pengangkatan_pejabat_FKU]
        // ])->orwhere([
        //     ['id_layanan', '=', Helper::$pemberhentian_pejabat_FKU]
        // ])->orwhere([
        //     ['id_layanan', '=', Helper::$perpindahan_pejabat_FKU]
        // ])->orwhere([
        //     ['id_layanan', '=', Helper::$ralat_keppres_jabatan_FKU]
        // ])->orwhere([
        //     ['id_layanan', '=', Helper::$pembatalan_keppres_jabatan_FKU]
        // ])->get();

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
            $group_roles[$user->group][]=$user->role;
        }

        return view('pages.koor_pokja.list_rkp', compact('page_title', 'page_description', 'currentUser', 'rkps'));
    }

}
