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
use App\Surat;
use App\Periode;
use App\Helper;

use Carbon\Carbon;

define("webaddress", "http://104.248.194.62");

class TextEditorInboxPendingController extends Controller
{
    private $curr_int_time;

    public function __construct()
    {
        $this->curr_int_time = strtotime(Carbon::now());
        $this->middleware('auth');
        
    }

    public function index($id) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | Text Editor';
        $page_description = 'Text Editor';
        $pengangkatans = PengangkatanPemberhentianJFKU::where('id', $id)->first();
        // dd($pengangkatans->nip);
			
		
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$pin = mt_rand(1000000, 9999999)
			. mt_rand(1000000, 9999999)
			. $characters[rand(0, strlen($characters) - 1)];
	

        //$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$filename = "Surat_Pengembalian_Berkas_Template";
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path("app/public/Template/".$filename.".docx"));

		$stringrnd = str_shuffle($pin);

		$templateProcessor->setValue('no_surat_usulan', $pengangkatans['no_surat_usulan']);
		$templateProcessor->setValue('instansi_pengusul', $pengangkatans['instansi_pengusul']);
		$templateProcessor->setValue('tanggal_surat_usulan', $pengangkatans['tanggal_surat_usulan']);
		$templateProcessor->setValue('nama', $pengangkatans['nama']);     

		
		$newfilename = $filename."_".$stringrnd.".docx"; 
		$templateProcessor->saveAs(storage_path("app/public/TemporaryGenerator/".$newfilename));
		$urlhead = urlencode(webaddress."/storage/TemporaryGenerator/".$newfilename);		
		
        return view('pages.koor_pokja.inbox.text_editor_inbox_pending', compact('page_title', 'page_description', 'currentUser', 'pengangkatans','stringrnd','newfilename','urlhead'));
    }

    public function store(Request $request)
    {
		
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        $nip = $input['v_nip'];
        $pengirim = $input['v_pengirim'];
        $validator = Validator::make($input, [
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = Surat::create([
            'description' => $input['description'],
            'id_usulan' => $id,
            'id_layanan' => $jenis_layanan,
            'nip' => $nip,
            'id_pengirim' => $pengirim,
            'status' => Helper::$pending_pokja
        ]);

        return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Surat Berhasil Dipending!!!!']);
    }

    public function tolak(Request $request)
    {
        $input = $request->all();
        $id = $input['v_id'];
        $jenis_layanan = $input['v_jenis'];
        $nip = $input['v_nip'];
        $pengirim = $input['v_pengirim'];
        $validator = Validator::make($input, [
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengangkatans = Surat::create([
            'description' => $input['description'],
            'id_usulan' => $id,
            'id_layanan' => $jenis_layanan,
            'nip' => $nip,
            'id_pengirim' => $pengirim,
            'status' => Helper::$tolak_pokja
        ]);

        return redirect()->route('koor-pokja.inbox.jfku.index')->with(['success'=>'Surat Berhasil Ditolak!']);
    }
}
