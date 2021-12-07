<?php

namespace App\Http\Controllers\BackWeb\Koor_Pokja_Pensiun\Inbox;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\UserManagement;
use App\PengangkatanPemberhentianJFKU;
use App\PengangkatanPemberhentianNS;
use App\PengangkatanPemberhentianLainnya;
use App\KenaikanPangkat;
use App\Pangkat;
use App\Periode;
use App\Pemberhentian;
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

    public function index($id, $jenis_layanan) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Inbox | JFKU | Distributor';
        $page_description = 'Distributor';
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        $ns = PengangkatanPemberhentianNS::where('id', $id)->first();
        $lainnya = PengangkatanPemberhentianLainnya::where('id', $id)->first();
        $kenaikan = KenaikanPangkat::where('id', $id)->first();
        $pemberhentian = Pemberhentian::where('id', $id)->first();
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
            $group_roles[$user->group][]=$user->role;
        }


        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            return view('pages.koor_pokja_pensiun.inbox.distributor_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'group_lists', 'group_users', 'group_roles', 'pemberhentian'));
        }
    }

    public function store_group($id, $jenis_layanan, Request $request) 
    {
        // dd($id);
        $input = $request->all();
        
        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang )
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['group_id' => $input['group']]
            );
            return redirect()->route('koor-pokja-pensiun.inbox.pemberhentian.index')->with(['success'=>'Distribusi Group Berhasil!']);
        }
    }

    public function store_distributor($id, $jenis_layanan, Request $request) 
    {
        $input = $request->all();
        if($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['distributor_id' => $input['distributor']]
            );
            return redirect()->route('koor-pokja-pensiun.inbox.pemberhentian.index')->with(['success'=>'Distribusi Perorangan Success !!!']);
        }
    }


}
