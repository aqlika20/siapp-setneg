<?php

namespace App;
use App\Bkn;
use DateTime;

class Helper {

    // jenis layanan
    public static $pengangkatan_pejabat_FKU = 1;                        // Pengangkatan Pejabat Fungsional Keahlian Utama
    public static $pemberhentian_pejabat_FKU = 2;                       // Pemberhentian Pejabat Fungsional Keahlian Utama
    public static $perpindahan_pejabat_FKU = 3;                         // Perpindahan Pejabat Fungsional Keahlian Utama
    public static $ralat_keppres_jabatan_FKU = 4;                       // Ralat Keppres Jabatan Fungsional Keahlian Utama
    public static $pembatalan_keppres_jabatan_FKU = 5;                  // Pembatalan Keppres Jabatan Fungsional Keahlian Utama

    public static $pengangkatan_pejabat_NS = 6;                         // Pengangkatan Pejabat Non Struktural
    public static $pemberhentian_pejabat_NS = 7;                        // Pemberhentian Pejabat Non Struktural
    public static $ralat_keppres_jabatan_NS = 8;                        // Ralat Keppres Jabatan Non Struktural
    public static $pembatalan_keppres_jabatan_NS = 9;                   // Pembatalan Keppres Jabatan Non Struktural

    public static $pengangkatan_pejabat_lainnya = 10;                   // Pengangkatan Pejabat Lainnya
    public static $pemberhentian_pejabat_lainnya = 11;                  // Pemberhentian Pejabat Lainnya
    public static $ralat_keppres_jabatan_lainnya = 12;                  // Ralat Keppres Jabatan Lainnya
    public static $pembatalan_keppres_jabatan_lainnya = 13;             // Pembatalan Keppres Jabatan Lainnya
    public static $persetujuan_pengangkatan_staf_khusus = 14;           // Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga
    
    public static $pemberian_kenaikan_pangkat = 15;                     // Pemberian Kenaikan Pangkat
    public static $pembatalan_keppres_kenaikan_pangkat = 16;            // Pembatalan Keppres Kenaikan Pangkat
    public static $pengesahan_kenaikan_pangkat = 17;                    // Pengesahan Kenaikan Pangkat
    public static $ralat_keppres_kepangkatan = 18;                      // Ralat Keppres Kepangkatan
    
    public static $bup_non_kpp = 19;                                    // BUP Non KPP
    public static $bup_kpp = 20;                                        // BUP KPP
    public static $berhenti_atas_permintaan_sendiri = 21;               // Berhenti Atas Permintaan Sendiri
    public static $non_bup_JDA_non_kpp = 22;                            // Non BUP Janda/Duda/Anak non KPP
    public static $non_bup_JDA_kpp = 23;                                // Non BUP Janda/Duda/Anak KPP
    public static $berhenti_tidak_hormat = 24;                          // Berhenti Tidak Dengan Hormat
    public static $anumerta = 25;                                       // Anumerta
    public static $pemberhentian_sementara = 26;                        // Pemberhentian Sementara
    public static $ralat_keppres_pemberhentian = 27;                    // Ralat Keppres Pemberhentian
    public static $pembatalan_keppress_pemberhentian = 28;              // Pembatalan Keppres Pemberhentian
    public static $petikan_keppres_hilang = 29;                         // Petikan Keppres yang Hilang/Rusak
    public static $masa_persiapan_pensiun = 30;                         // Masa Persiapan Pensiun
    public static $permasalahan_kepegawaian_lainnya = 31;                         // Permasalahan Kepegawaian Lainnya

    public static function defineJenisLayananBy($type)
    {
        $jenis_layanan = "";
        switch ($type) {
            case '1':
                $jenis_layanan = 'Pengangkatan Pejabat Fungsional Keahlian Utama';
                break;

            case '2':
                $jenis_layanan = 'Pemberhentian Pejabat Fungsional Keahlian Utama';
                break;

            case '3':
                $jenis_layanan = 'Perpindahan Pejabat Fungsional Keahlian Utama';
                break;
            
            case '4':
                $jenis_layanan = 'Usulan Lainnya';
                break;

            case '5':
                $jenis_layanan = 'Pembatalan Keppres Jabatan Fungsional Keahlian Utama';
                break;

            case '6':
                $jenis_layanan = 'Pengangkatan Pejabat Non Struktural';
                break;

            case '7':
                $jenis_layanan = 'Pemberhentian Pejabat Non Struktural';
                break;
            
            case '8':
                $jenis_layanan = 'Ralat Keppres Jabatan Non Struktural';
                break;
            
            case '9':
                $jenis_layanan = 'Pembatalan Keppres Jabatan Non Struktural';
                break;

            case '10':
                $jenis_layanan = 'Pengangkatan Pejabat Lainnya';
                break;

            case '11':
                $jenis_layanan = 'Pemberhentian Pejabat Lainnya';
                break;
            
            case '12':
                $jenis_layanan = 'Ralat Keppres Jabatan Lainnya';
                break;

            case '13':
                $jenis_layanan = 'Pembatalan Keppres Jabatan Lainnya';
                break;

            case '14':
                $jenis_layanan = 'Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga';
                break;

            case '15':
                $jenis_layanan = 'Pemberian Kenaikan Pangkat';
                break;
            
            case '16':
                $jenis_layanan = 'Pembatalan Keppres Kenaikan Pangkat';
                break;

            case '17':
                $jenis_layanan = 'Petikan Yang Hilang/Rusak';
                break;

            case '18':
                $jenis_layanan = 'Ralat Keppres Kepangkatan';
                break;

            case '19':
                $jenis_layanan = 'BUP Non KPP';
                break;
            
            case '20':
                $jenis_layanan = 'BUP KPP';
                break;
            
            case '21':
                $jenis_layanan = 'Berhenti Atas Permintaan Sendiri';
                break;

            case '22':
                $jenis_layanan = 'Non BUP Janda/Duda/Anak non KPP';
                break;

            case '23':
                $jenis_layanan = 'Non BUP Janda/Duda/Anak KPP';
                break;

            case '24':
                $jenis_layanan = 'Berhenti Tidak Dengan Hormat';
                break;
            
            case '25':
                $jenis_layanan = 'Anumerta';
                break;

            case '26':
                $jenis_layanan = 'Pemberhentian Sementara';
                break;

            case '27':
                $jenis_layanan = 'Ralat Keppres Pemberhentian';
                break;

            case '28':
                $jenis_layanan = 'Pembatalan Keppres Pemberhentian';
                break;
            
            case '29':
                $jenis_layanan = 'Petikan Keppres yang Hilang/Rusak';
                break;

            case '30':
                $jenis_layanan = 'Masa Persiapan Pensiun';
                break;

            case '31':
                $jenis_layanan = 'Permasalahan Kepegawaian Lainnya';
                break;

        }

        return $jenis_layanan;
    }

     // status
     public static $pengajuan_usulan = 1;
     public static $pending_pokja = 2;
     public static $pending_jf_ahli = 3;
     public static $pending_karo = 4;
     public static $pending_deputi = 5;
     public static $tolak_pokja = 6;
     public static $tolak_jf_ahli = 7;
     public static $tolak_karo = 8;
     public static $tolak_deputi = 9;
     public static $verifikasi_pokja = 10;
     public static $verifikasi_jf_ahli = 11;
     public static $verifikasi_karo = 12;
     public static $verifikasi_deputi = 13;
     public static $pengembalian_surat_usulan = 14;
     public static $verifikasi_bkn_pokja = 15;
     public static $verifikasi_bkn_jf_ahli = 16;
     public static $verifikasi_bkn_karo = 17;
     public static $verifikasi_bkn_deputi = 18;
     public static $pending_bkn_pokja = 19;
     public static $pending_bkn_jf_ahli = 20;
     public static $pending_bkn_karo = 21;
     public static $pending_bkn_deputi = 22;
     public static $tolak_bkn_pokja = 23;
     public static $tolak_bkn_jf_ahli = 24;
     public static $tolak_bkn_karo = 25;
     public static $tolak_bkn_deputi = 26;
     public static $verifikasi_rkp_pokja = 27;
     public static $verifikasi_rkp_deputi = 28;
     public static $usulan_dikembalikan = 29;

    public static function defineStatusBy($type)
    {
        $status = "";
        switch ($type) {
            case '1':
                $status = 'Pengajuan Surat Usulan';
                break;

            case '2':
                $status = 'Pending Pokja';
                break;
            
            case '3':
                $status = 'Pending JF Ahli';
                break;

            case '4':
                $status = 'Pending Karo';
                break;

            case '5':
                $status = 'Pending Deputi';
                break;
    
            case '6':
                $status = 'Tolak Pokja';
                break;

            case '7':
                $status = 'Tolak JF Ahli';
                break;

            case '8':
                $status = 'Tolak Karo';
                break;

            case '9':
                $status = 'Tolak Deputi';
                break;
                
            case '10':
                $status = 'Diverifikasi Pokja';
                break;
                
            case '11':
                $status = 'Diverifikasi JF Ahli';
                break;
                
            case '12':
                $status = 'Diverifikasi Karo';
                break;
                
            case '13':
                $status = 'Diverifikasi Deputi';
                break;
                
            case '14':
                $status = 'Pengembalian Surat Usulan';
                break;

            case '15':
                $status = 'Pertek Diverifikasi Pokja';
                break;

            case '16':
                $status = 'Pertek Diverifikasi JF Ahli';
                break;

            case '17':
                $status = 'Pertek Diverifikasi Karo';
                break;

            case '18':
                $status = 'Pertek Diverifikasi Deputi';
                break;

            case '19':
                $status = 'Pertek Pending Pokja';
                break;

            case '20':
                $status = 'Pertek Pending JF Ahli';
                break;

            case '21':
                $status = 'Pertek Pending Karo';
                break;

            case '22':
                $status = 'Pertek Pending Deputi';
                break;
                
            case '23':
                $status = 'Pertek Tolak Pokja';
                break;

            case '24':
                $status = 'Pertek Tolak JF Ahli';
                break;

            case '25':
                $status = 'Pertek Tolak Karo';
                break;

            case '26':
                $status = 'Pertek Tolak Deputi';
                break;

            case '27':
                $status = 'RKP Terverifikasi Pokja';
                break;

            case '28':
                $status = 'RKP Terverifikasi Deputi';
                break;

            case '29':
                $status = 'Pengajuan Dikembalikan Untuk Direvisi';
                break;
            
            case '0':
                $status = 'Terima Pertek BKN';
                break;
            
            case '0':
                $status = 'Pengembalian Pertek BKN';
                break;

            case '0':
                $status = 'Penyiapan Rancangan Keppres';
                break;

            case '0':
                $status = 'Pengajuan Rancangan Keppres ';
                break;

            case '0':
                $status = 'Penomoran Keppres';
                break;

            case '0':
                $status = 'Penyiapan Salinan dan Petikan Keppres';
                break;
            
            case '0':
                $status = 'Pengiriman';
                break;

            case '0':
                $status = 'Penyampaian Tanda Terima';
                break;

        }

        return $status;
    }

    public static function convertDatetoMonths($date){
        $date = date('m', strtotime($date));
        return $date;
    }

    public static function convertDatetoDB($date){
        $date = date('y-m-d', strtotime($date));
        return $date;
    }

    public static function convertDate($date){
        $date = date('d M Y', strtotime($date));
        return $date;
    }

    public static function definePertek($nip){

        // $pertek_bkns = Bkn::where([
        //     ['nip', '=', $nip]
        // ])->first();

        // $pertek_bkns = Bkn::All();
        $pertek_bkns = Bkn::select('nip')->where('nip', $nip)->get();
        
        // dd($pertek_bkns);
        $nip_bkn = [];
        foreach($pertek_bkns as $pertek)
        {
            $nip_bkn = $pertek->nip;
        }
        
        if($nip_bkn == $nip){
            $status = "Pertek Tersedia";
        }
        elseif($nip_bkn == null){
            $status = "Pertek Belum Tersedia";
        }
        // foreach($pertek_bkns as $pertek)
        // {
        //     // dd($pertek->nip);
        // }
        // dd($pertek_bkns->nip);
        

        return $status;
    }

    public static function countDate($dates){
        $countDate = [];
        foreach($dates as $server_date){
            $time_created = $server_date->created_at;
            $countDate = date("d M Y", strtotime("+1 month", strtotime($time_created)));
        }
        return $countDate;
    }
    
    // public static function countDateMasa($date_start, $date_end){
    //     $date_start = new DateTime($date_start);
    //     $date_end = new DateTime($date_end);
    //     $age = date_diff(date_create($date_end), date_create($date_start));
    //     $calculate = $age->format("%y");
    //     return $calculate;
    // }

    // public static function defineDate($date_start, $date_end, $date_keppes, $date_pelantikan){
    //     $age = date_diff(date_create($date_end), date_create($date_start));
    //     $calculate = $age->format("%y");
    //     return $calculate;
    // }

    public static function fileBreak($file_name){
        $file_name = str_replace(['[', ']', '"',], "", $file_name);
        $files = explode(",", $file_name);
        return $files;
    }

};