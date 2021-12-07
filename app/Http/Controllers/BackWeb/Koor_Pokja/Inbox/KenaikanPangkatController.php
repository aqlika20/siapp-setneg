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
use App\Pendidikan;
use App\JabatanPAK;
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
        $pendidikans = Pendidikan::All();

        $notes = [];

        $file_data_usulans = Helper::fileBreak($verifikasi->file_data_usulan);
        $file_nota_usulans = Helper::fileBreak($verifikasi->file_nota_usulan);
        $file_sk_pangkat_terakhirs = Helper::fileBreak($verifikasi->file_sk_pangkat_terakhir);
        $file_sk_jabatans = Helper::fileBreak($verifikasi->file_sk_jabatan);
        $file_data_paks = Helper::fileBreak($verifikasi->file_data_pak);
        $file_klarifikasi_paks = Helper::fileBreak($verifikasi->file_klarifikasi_pak);
        $file_baps = Helper::fileBreak($verifikasi->file_bap);
        $file_spps = Helper::fileBreak($verifikasi->file_spp);
        $file_hukumans = Helper::fileBreak($verifikasi->file_hukuman);
        $file_skp_1_tahun_terakhirs = Helper::fileBreak($verifikasi->file_skp_1_tahun_terakhir);
        $file_skp_2_tahun_terakhirs = Helper::fileBreak($verifikasi->file_skp_2_tahun_terakhir);
        $file_surat_keputusan_ppks = Helper::fileBreak($verifikasi->file_surat_keputusan_ppk);
        $file_surat_permohonans = Helper::fileBreak($verifikasi->file_surat_permohonan);
        $file_keppres_dibatalkans = Helper::fileBreak($verifikasi->file_keppres_dibatalkan);
        $file_alasans = Helper::fileBreak($verifikasi->file_alasan);
        $file_fotokopi_sk_hilangs = Helper::fileBreak($verifikasi->file_fotokopi_sk_hilang);
        $file_surat_kehilangans = Helper::fileBreak($verifikasi->file_surat_kehilangan);
        $file_dokumen_klarifikasis = Helper::fileBreak($verifikasi->file_dokumen_klarifikasi);
        $file_fotokopi_sk_diperbaikis = Helper::fileBreak($verifikasi->file_fotokopi_sk_diperbaiki);


        if($verifikasi->jenis_layanan == Helper::$pemberian_kenaikan_pangkat || $verifikasi->jenis_layanan == Helper::$pengesahan_kenaikan_pangkat)
        {
            $notes = Catatan::where([
                ['id_usulan', '=', $id], ['id_layanan', '=', $verifikasi->jenis_layanan]
            ])->get();

        }

        $pendidikan_terakhirs = Pendidikan::where([
            ['id', '=' , $verifikasi->pendidikan_terakhir]
        ])->get();

        $pangkat_gol_barus = Pangkat::where([
            ['id', '=' , $verifikasi->pangkat_gol_baru]
        ])->get();

        $jabatan_paks = JabatanPAK::where([
            ['id', '=' , $verifikasi->jabatan_pak]
        ])->get();

        if (!$verifikasi) {
            return redirect()->route('pages.koor_pokja.inbox.kenaikan_pangkat')->with(['error'=>'Invalid parameter id.']);
        }
    
        return view('pages.koor_pokja.inbox.verif_kenaikan_pangkat', compact('page_title', 'page_description', 'file_nota_usulans', 'file_data_usulans', 'file_sk_pangkat_terakhirs', 'file_sk_jabatans', 'file_data_paks', 'file_klarifikasi_paks', 'file_baps', 'file_spps', 'file_hukumans', 'file_skp_1_tahun_terakhirs', 'file_skp_2_tahun_terakhirs', 'file_surat_keputusan_ppks', 'currentUser', 'verifikasi', 'jabatans', 'unsurs', 'periodes', 'notes', 'pangkats', 'pendidikans', 'pendidikan_terakhirs', 'pangkat_gol_barus','jabatan_paks', 'file_surat_permohonans', 'file_keppres_dibatalkans','file_alasans', 'file_fotokopi_sk_hilangs', 'file_dokumen_klarifikasis', 'file_fotokopi_sk_diperbaikis', 'file_surat_kehilangans'));
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
            return redirect()->route('koor-pokja.inbox.kenaikan-pangkat.index')->with(['success'=>'Verifikasi Berhasil!']);
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
            return redirect()->route("koor-pokja.inbox.text-editor.kenaikan.index", [$id])->with(['success'=>'Verifikasi Berhasil!']);
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
            return redirect()->route("koor-pokja.pertek.index")->with(['success'=>'Verifikasi Berhasil!']);
        }
    }

}
