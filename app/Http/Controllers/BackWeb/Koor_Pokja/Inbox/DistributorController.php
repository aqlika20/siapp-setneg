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

        dd($group_roles);

        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            return view('pages.koor_pokja.inbox.distributor', compact('page_title', 'page_description', 'currentUser', 'group_lists', 'group_users', 'group_roles', 'pengangkatans'));
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            return view('pages.koor_pokja.inbox.distributor_ns', compact('page_title', 'page_description', 'currentUser', 'group_lists', 'group_users', 'group_roles', 'ns'));    
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            return view('pages.koor_pokja.inbox.distributor_lainnya', compact('page_title', 'page_description', 'currentUser', 'group_lists', 'group_users', 'group_roles', 'lainnya'));
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            return view('pages.koor_pokja.inbox.distributor_kenaikan', compact('page_title', 'page_description', 'currentUser', 'group_lists', 'group_users', 'group_roles', 'kenaikan'));
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            return view('pages.koor_pokja.inbox.distributor_pemberhentian', compact('page_title', 'page_description', 'currentUser', 'group_lists', 'group_users', 'group_roles', 'pemberhentian'));
        }
    }

    public function store_group($id, $jenis_layanan, Request $request) 
    {
        // dd($id);
        $input = $request->all();
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['group_id' => $input['group']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Group Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['group_id' => $input['group']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Group Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['group_id' => $input['group']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Group Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['group_id' => $input['group']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Group Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang )
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['group_id' => $input['group']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Group Success !!!']);
        }
    }

    public function store_distributor($id, $jenis_layanan, Request $request) 
    {
        $input = $request->all();
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['distributor_id' => $input['distributor']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Perorangan Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['distributor_id' => $input['distributor']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Perorangan Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['distributor_id' => $input['distributor']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Perorangan Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['distributor_id' => $input['distributor']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Perorangan Success !!!']);
        }
        elseif($jenis_layanan == Helper::$bup_non_kpp || $jenis_layanan == Helper::$bup_kpp || $jenis_layanan == Helper::$berhenti_atas_permintaan_sendiri || $jenis_layanan == Helper::$non_bup_JDA_non_kpp || $jenis_layanan == Helper::$non_bup_JDA_kpp || $jenis_layanan == Helper::$berhenti_tidak_hormat || $jenis_layanan == Helper::$anumerta || $jenis_layanan == Helper::$pemberhentian_sementara || $jenis_layanan == Helper::$ralat_keppres_pemberhentian || $jenis_layanan == Helper::$pembatalan_keppress_pemberhentian || $jenis_layanan == Helper::$petikan_keppres_hilang)
        {
            $pengangkatans = Pemberhentian::where('id', '=', $id)->update(
                ['distributor_id' => $input['distributor']]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Distribusi Perorangan Success !!!']);
        }
    }


}
