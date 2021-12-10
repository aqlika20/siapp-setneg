<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\UserManagement;
use App\Pangkat;
use App\Surat;
use App\Periode;
use App\Helper;


define("webaddress", "http://104.248.194.62");
class CallbackDocument extends Controller
{
    //
    private $curr_int_time;
	private $currentUser;
	private $page_title;
	private $page_description;
	
	
	public function index()
	{
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | Text Editor';
        $page_description = 'Text Editor';
		$stringrnd = "Khirz6zTPdfd3d234sd";	
		$newfilename = "rancangan_keppres_template.docx";
		$urlhead = urlencode(webaddress."/storage/Template/".$newfilename);
        return view('pages.callbackdocx', compact('page_title', 'currentUser', 'page_description','newfilename','urlhead','stringrnd'));
		
	}
	
    public function store(Request $request)
    {
		$input = $request->all();
		
		
        $currentUser = UserManagement::find(Auth::id());
        $page_title = 'Koordinator Pokja | Text Editor';
        $page_description = 'Text Editor';
		
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$pin = mt_rand(1000000, 9999999)
			. mt_rand(1000000, 9999999)
			. $characters[rand(0, strlen($characters) - 1)];
	

        //$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$filename = "rancangan_keppres_template";
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path("app/public/Template/".$filename.".docx"));

		$stringrnd = str_shuffle($pin);

		$templateProcessor->setValue('NOMORSURAT', $input['no_surat_usulan']);            // On section/content
		$templateProcessor->setValue('userId', $input['ppk_pejabat_yang_diusulkan']);            // On section/content
		$newfilename = $filename.$stringrnd.".docx"; 
		$templateProcessor->saveAs(storage_path("app/public/TemporaryGenerator/".$newfilename));
		$urlhead = urlencode(webaddress."/storage/TemporaryGenerator/".$newfilename);

        return view('pages.callbackdocx', compact('page_title', 'currentUser', 'page_description','newfilename','urlhead','stringrnd'));

        //return response()->download();
    }
	
}
