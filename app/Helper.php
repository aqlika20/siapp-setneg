<?php

namespace App;

class Helper {

    // jenis layanan
    public static $pengangkatan_pejabat_FKU = 1;                        // Pengangkatan Pejabat Fungsional Keahlian Utama
    public static $pemberhentian_pejabat_FKU = 2;                       // Pemberhentian Pejabat Fungsional Keahlian Utama
    public static $Perpindahan_pejabat_FKU = 3;                         // Perpindahan Pejabat Fungsional Keahlian Utama
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
    public static $proses = 1;
    public static $pending = 2;
    public static $tolak = 3;





    public static function convertDatetoMonths($date){
        $date = date('m', strtotime($date));

        return $date;
    }
};