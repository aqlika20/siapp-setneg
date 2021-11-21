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
use App\KenaikanPangkat;
use App\Pangkat;
use App\Penolakan;
use App\Jabatan;
use App\Unsur;
use App\Periode;
use App\Catatan;
use App\Group;
use App\Helper;

use Carbon\Carbon;

class KenaikanPangkatController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index() 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Inbox | Kenaikan Pangkat';
        $page_description = 'Kenaikan Pangkat';
        $pengangkatans = KenaikanPangkat::where([
            ['status', '=', Helper::$pengajuan_usulan],
            ['distributor_id', '=', null],
            ['group_id', '=', null]
        ])->get();

        $jfku_verifikasis = KenaikanPangkat::where([
            ['status', '=', Helper::$verifikasi_pokja]
        ])->orwhere([
            ['status', '=', Helper::$verifikasi_jf_ahli]
        ])->get();

        $kenaikan_pendings = KenaikanPangkat::where([
            ['status', '=', Helper::$pending_pokja]
        ])->orwhere([
            ['status', '=', Helper::$pending_jf_ahli]
        ])->get();

        $jfku_tolaks = KenaikanPangkat::where([
            ['status', '=', Helper::$tolak_pokja]
        ])->orwhere([
            ['status', '=', Helper::$tolak_jf_ahli]
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
            $group_roles[$user->group][]=$user->role;
        }

        return view('pages.koor_pokja.inbox.kenaikan_pangkat', compact('jfku_verifikasis', 'page_title', 'page_description', 'currentUser', 'pengangkatans', 'kenaikan_pendings', 'jfku_tolaks', 'group_lists', 'group_users', 'group_roles'));
    }

    public function verification($id){
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'KemenSetneg | Verification';
        $page_description = 'Verification';
        $verifikasi = KenaikanPangkat::where('id', $id)->first();
        $jabatans = Jabatan::all();
        $unsurs = Unsur::all();
        $periodes = Periode::all();
        $pangkats = Pangkat::All();

        $notes = [];

        $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        $file_nota_usulan_asns = Helper::fileBreak($verifikasi->file_nota_usulan_asn);
        $file_nota_usulans = Helper::fileBreak($verifikasi->file_nota_usulan);
        $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        $file_jabatans = Helper::fileBreak($verifikasi->file_jabatan);
        $file_pengambilan_sumpahs = Helper::fileBreak($verifikasi->file_pengambilan_sumpah);
        $file_pendukungs  = Helper::fileBreak($verifikasi->file_pendukung);
        $file_ba_pelantikans  = Helper::fileBreak($verifikasi->file_ba_pelantikan);
        $file_sumpah_jabatans  = Helper::fileBreak($verifikasi->file_sumpah_jabatan);
        $file_surat_pengantars  = Helper::fileBreak($verifikasi->file_surat_pengantar);
        $file_keppress  = Helper::fileBreak($verifikasi->file_keppres);
        $file_bukti_pendukungs  = Helper::fileBreak($verifikasi->file_bukti_pendukung);


        if($verifikasi->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $verifikasi->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        if (!$verifikasi) {
            return redirect()->route('pages.koor_pokja.inbox.kenaikan_pangkat')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif_kenaikan_pangkat', compact('page_title', 'page_description', 'file_bukti_pendukungs', 'file_keppress', 'file_surat_pengantars', 'file_sumpah_jabatans', 'file_ba_pelantikans', 'file_pendukungs', 'file_pengambilan_sumpahs', 'file_jabatans', 'file_klarifikasi_paks', 'file_data_paks', 'file_nota_usulans', 'file_nota_usulan_asns', 'file_data_usulans', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats'));
    }

    public function store_proses(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$verifikasi_pokja]
            );
            return redirect()->route('koor-pokja.inbox.kenaikan-pangkat.index')->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function store_pending(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];

        if($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$pending_pokja]
            );
            return redirect()->route("koor-pokja.inbox.text-editor.kenaikan.index", [$id])->with(['success'=>'verifikasi Success !!!']);
        }
    }

    public function store_tolak(Request $request) 
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        $id_pengirim = $input['v_pengirim'];
        $id_verifikator = $input['v_verifikator'];
        $nama_verifikator = $input['v_nama_verifikator'];
        
        if($jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $jenis_layanan == Helper::$pembatalan_keppres_kenaikan_pangkat || $jenis_layanan == Helper::$pengesahan_kenaikan_pangkat || $jenis_layanan == Helper::$ralat_keppres_kepangkatan )
        {
            $pengangkatans = KenaikanPangkat::where('id', '=', $id)->update(
                ['status' => Helper::$tolak_pokja]
            );
            $tolaks = Penolakan::create([
                'id_usulan' => $id,
                'id_layanan' => $jenis_layanan,
                'id_pengirim' => $id_pengirim,
                'id_verifikator' => $id_verifikator,
                'nama_verifikator' => $nama_verifikator,
                'tanggal_prosess_penolakan' => Helper::convertDatetoDB($input['tanggal_prosess_penolakan']),
                'alasan_penolakan' => $input['alasan_penolakan']
            ]);
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'verifikasi Success !!!']);
        }
    }

}
