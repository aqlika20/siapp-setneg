<?php

namespace App\Helpers;

class BknHelper
{
    /**
     * get access token
     *
     * @return string
     */
    public function getAcceessToken()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://wstraining.bkn.go.id/oauth/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'client_id=setnegtr&grant_type=client_credentials',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'origin: http://localhost:20000',
                'Authorization: Basic c2V0bmVndHI6NDAwMXRy'
            )
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    /**
     * get data by nip
     *
     * @param string $token
     * @param string $nip
     * @return string
     */
    public function getDataByNip($token, $nip)
    {
        $curl = curl_init();
        $bearerToken = 'Authorization: Bearer ' . $token;
        $url = 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/data-utama/' . $nip;

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'origin: http://localhost:20000',
                $bearerToken
            )
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    public function getDataAnakByNip($token, $nip)
    {
        $curl = curl_init();
        $bearerToken = 'Authorization: Bearer ' . $token;
        
        $url = 'https://wstraining.bkn.go.id/bkn-resources-server/api/pns/data-anak-taspen/' . $nip;

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'origin: http://localhost:20000',
                $bearerToken
            )
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
