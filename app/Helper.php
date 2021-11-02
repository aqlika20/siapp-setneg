<?php

namespace App;

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


    // status
    public static $pengajuan_usulan = 1;
    public static $pending = 2;
    public static $tolak = 3;
    public static $Diproses_Pokja = 3;
    public static $pengembalian_surat_usulan = 5;
    // public static $tolak = 3;
    // public static $tolak = 3;
    // public static $tolak = 3;
    // public static $tolak = 3;

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
                $jenis_layanan = 'Ralat Keppres Jabatan Fungsional Keahlian Utama';
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
                $jenis_layanan = 'Pengesahan Kenaikan Pangkat';
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

        }

        return $jenis_layanan;
    }

    public static function defineStatusBy($type)
    {
        $status = "";
        switch ($type) {
            case '1':
                $status = 'Pengajuan Surat Usulan';
                break;

            case '2':
                $status = 'Pending';
                break;

            case '3':
                $status = 'Tolak';
                break;

            case '4':
                $status = 'Diproses Pokja';
                break;

            case '5':
                $status = 'Pengembalian Surat Usulan';
                break;

            case '6':
                $status = 'Terima Pertek BKN';
                break;
            
            case '7':
                $status = 'Pengembalian Pertek BKN';
                break;

            case '8':
                $status = 'Penyiapan Rancangan Keppres';
                break;

            case '9':
                $status = 'Pengajuan Rancangan Keppres ';
                break;

            case '10':
                $status = 'Penomoran Keppres';
                break;

            case '11':
                $status = 'Penyiapan Salinan dan Petikan Keppres';
                break;
            
            case '12':
                $status = 'Pengiriman';
                break;

            case '13':
                $status = 'Penyampaian Tanda Terima';
                break;

            case '14':
                $status = 'Diverifikasi Pokja';
                break;

        }

        return $status;
    }

    public static function convertDatetoMonths($date){
        $date = date('m', strtotime($date));
        return $date;
    }

    public static function convertDate($date){
        $date = date('d M Y', strtotime($date));
        return $date;
    }

    public static function countDate($dates){
        $countDate = [];
        foreach($dates as $server_date){
            $time_created = $server_date->created_at;
            $countDate = date("d M Y", strtotime("+1 month", strtotime($time_created)));
        }
        return $countDate;
    } 

    public static function fileBreak($file_name){
        $file_name = str_replace(['[', ']', '"',], "", $file_name);
        $files = explode(",", $file_name);
        return $files;
    }

};