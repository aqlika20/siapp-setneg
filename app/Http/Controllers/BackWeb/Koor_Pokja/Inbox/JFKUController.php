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
            ['status', '=', Helper::$pengajuan_usulan],
            ['distributor_id', '=', null],
            ['group_id', '=', null]
        ])->get();

        $jfku_pendings = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$pending]
        ])->get();

        $jfku_tolaks = PengangkatanPemberhentianJFKU::where([
            ['status', '=', Helper::$tolak]
        ])->get();

        $pengangkatans_ns = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['distributor_id', '=', null],
            ['group_id', '=', null]
        ])->get();

        $ns_pendings = PengangkatanPemberhentianNS::where([
            ['status', '=', Helper::$pending]
        ])->get();

        $ns_tolaks = PengangkatanPemberhentianNS::where([
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


        return view('pages.koor_pokja.inbox.jfku', compact('page_title', 'page_description', 'currentUser', 'pengangkatans', 'jfku_pendings', 'jfku_tolaks', 'group_lists', 'group_users', 'group_roles', 'pengangkatans_ns', 'ns_pendings', 'ns_tolaks'));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi = PengangkatanPemberhentianJFKU::where('id', $id)->first();

        $notes = Catatan::where('id_usulan', $id)->get();

        if (!$verifikasi) {
            return redirect()->route('pages.koor_pokja.inbox.jfku')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif', compact('page_title', 'page_description', 'currentUser', 'verifikasi', 'notes'));
    }

    public function verification_ns($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi_ns = PengangkatanPemberhentianNS::where('id', $id)->first();

        // $notes = Catatan::where('id_usulan', $id)->get();

        if (!$verifikasi_ns) {
            return redirect()->route('pages.koor_pokja.inbox.jfku')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif_ns', compact('page_title', 'page_description', 'currentUser', 'verifikasi_ns'));
    }

    public function store_proses(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pengajuan_usulan]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function store_pending(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        // dd($jenis_layanan);
        if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        {
            $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        } 
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        {
            $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        {
            $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        }
        elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pending]
            );
            return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function store_tlk(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        dd($jenis_layanan);
        // if($jenis_layanan == Helper::$pengangkatan_pejabat_FKU || $jenis_layanan == Helper::$pemberhentian_pejabat_FKU || $jenis_layanan == Helper::$perpindahan_pejabat_FKU || $jenis_layanan == Helper::$ralat_keppres_jabatan_FKU || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_FKU)
        // {
        //     $pengangkatans = PengangkatanPemberhentianJFKU::where('id', '=', $id)->update(
        //         ['status' => Helper::$tolak]
        //     );
        //     return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        // } 
        // elseif($jenis_layanan == Helper::$pengangkatan_pejabat_NS || $jenis_layanan == Helper::$pemberhentian_pejabat_NS || $jenis_layanan == Helper::$ralat_keppres_jabatan_NS || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_NS )
        // {
        //     $pengangkatans = PengangkatanPemberhentianNS::where('id', '=', $id)->update(
        //         ['status' => Helper::$tolak]
        //     );
        //     return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        // }
        // elseif($jenis_layanan == Helper::$pengangkatan_pejabat_lainnya || $jenis_layanan == Helper::$pemberhentian_pejabat_lainnya || $jenis_layanan == Helper::$ralat_keppres_jabatan_lainnya || $jenis_layanan == Helper::$pembatalan_keppres_jabatan_lainnya || $jenis_layanan == Helper::$persetujuan_pengangkatan_staf_khusus )
        // {
        //     $pengangkatans = PengangkatanPemberhentianLainnya::where('id', '=', $id)->update(
        //         ['status' => Helper::$tolak]
        //     );
        //     return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        // }
        // elseif($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        // {
        //     $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
        //         ['status' => Helper::$tolak]
        //     );
        //     return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'verifikasi Success !!!']);
        // }
    }

}
