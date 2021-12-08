<?php

namespace App\Http\Controllers\BackWeb\PIC\Administrasi\Surat_Usulan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\SatuanKerja;


use Carbon\Carbon;

class AutocompleteController extends Controller
{
    function index()
    {
        return view('pengangkatan_pejabat_fku');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = SatuanKerja::where('nama', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
                    <li><a class="dropdown-item">'.$row->nama.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

   

}
