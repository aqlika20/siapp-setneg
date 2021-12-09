<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BknController extends Controller
{
    public function fetchData(Request $request)
    {
        try {

            $nip = $request->nip;
            // dd($nip);
            
            if (!is_numeric($nip) || strlen($nip) < 18)
                throw new \Exception('Nip tidak valid');
                
            // get access token
            $getAccessToken = app('bkn.helper')->getAcceessToken();

            if (false == app('string.helper')->isJson($getAccessToken))
                throw new \Exception("Response dari bkn tidak valid");

            $responseArray = json_decode($getAccessToken, true);
            
            if (false == array_key_exists('access_token', $responseArray))
                throw new \Exception("Response dari bkn tidak valid");

            // get data by nip
            $dataAsn = app('bkn.helper')->getDataByNip($responseArray['access_token'], $nip);
            
            if (false == app('string.helper')->isJson($dataAsn))
                throw new \Exception("Response dari bkn tidak valid");

            $responseArrayDataAsn = json_decode($dataAsn, true);
            
            if (false == array_key_exists('data', $responseArrayDataAsn))
                throw new \Exception("Response dari bkn tidak valid");

            if (false == app('string.helper')->isJson($responseArrayDataAsn['data']))
                throw new \Exception("Response dari bkn tidak valid");

            $dataAsnArray = json_decode($responseArrayDataAsn['data'], true);
            
            return response()->json([
                'status' => 'success',
                'data' => $dataAsnArray
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function fetchDataJDA(Request $request)
    {
        try {

            $nip = $request->nip;
            if (!is_numeric($nip) || strlen($nip) < 18)
                throw new \Exception('Nip tidak valid');
                
            // get access token
            $getAccessToken = app('bkn.helper')->getAcceessToken();

            if (false == app('string.helper')->isJson($getAccessToken))
                throw new \Exception("Response dari bkn tidak valid 1");

            $responseArray = json_decode($getAccessToken, true);
            
            if (false == array_key_exists('access_token', $responseArray))
                throw new \Exception("Response dari bkn tidak valid 2");

            // get data by nip
            $dataAnak = app('bkn.helper')->getDataAnakByNip($responseArray['access_token'], $nip);
            
            if (false == app('string.helper')->isJson($dataAnak))
                throw new \Exception("Response dari bkn tidak valid 3");

            $responseArrayDataAnak = json_decode($dataAnak, true);
            
            if (false == array_key_exists('data', $responseArrayDataAnak))
                throw new \Exception("Response dari bkn tidak valid 4");

            if (false == app('string.helper')->isJson($responseArrayDataAnak['data']))
                throw new \Exception("Response dari bkn tidak valid 5");

            $dataAnakArray = json_decode($responseArrayDataAnak['data'], true);
            
            return response()->json([
                'status' => 'success',
                'data' => $dataAnakArray
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
